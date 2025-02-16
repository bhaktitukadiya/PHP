<?php
// Database connection
include 'connection.php'; 

// Default records per page
$records_per_page = 10;
if (isset($_GET['length']) && is_numeric($_GET['length'])) {
    // Dynamic number of records per page from DataTables
    $records_per_page = $_GET['length']; 
}

// Start from this record (pagination offset)
$start = isset($_GET['start']) ? $_GET['start'] : 0;

// Search query (if search term is present)
$search_query = "";
if (isset($_GET['search']['value']) && !empty($_GET['search']['value'])) {
    $search_value = $_GET['search']['value'];
    $search_query = "WHERE 
        first_name LIKE '%$search_value%' OR 
        last_name LIKE '%$search_value%' OR 
        date_of_birth LIKE '%$search_value%' OR 
        stream LIKE '%$search_value%' OR 
        semester LIKE '%$search_value%' OR 
        address LIKE '%$search_value%' OR 
        city LIKE '%$search_value%' OR 
        pin LIKE '%$search_value%' OR 
        contact_number LIKE '%$search_value%' OR 
        email LIKE '%$search_value%'
    ";
}

// Total records count query (for pagination)
$total_query = "SELECT COUNT(id) AS total FROM std_registration $search_query";
$total_result = mysqli_query($connection, $total_query);
$total_records = $total_result->fetch_assoc()['total'];


$orderByColumnAndOrder = "";

//ORDER BY COLUMN 
if (!empty($_GET['order'] )) {

    $orderArray = $_GET['order'];
    $columns = $_GET['columns'];

    $orderDir = $orderArray [0]['dir'];
    $order = $orderArray [0]['column'];
    if (array_key_exists($order , $columns )) {
        $orderBy = $columns [$order ]['data'];

    }

    $orderByColumnAndOrder =  "ORDER BY ". $orderBy ." ". strtoupper($orderDir);
}



// Query to fetch student data with limit and search
$sql = "SELECT * FROM std_registration $search_query $orderByColumnAndOrder LIMIT $start, $records_per_page";
$result = mysqli_query($connection, $sql);

// Close the database connection
$connection->close();

// Prepare the data for DataTables
$students_data = [];
while ($row = mysqli_fetch_array($result)) {
    $students_data[] = [
        'id' => $row['id'],
        'first_name' => htmlspecialchars($row['first_name']),
        'last_name' => htmlspecialchars($row['last_name']),
        'date_of_birth' => htmlspecialchars($row['date_of_birth']),
        'stream' => htmlspecialchars($row['stream']),
        'semester' => htmlspecialchars($row['semester']),
        'address' => htmlspecialchars($row['address']),
        'city' => htmlspecialchars($row['city']),
        'pin' => htmlspecialchars($row['pin']),
        'contact_number' => htmlspecialchars($row['contact_number']),
        'email' => htmlspecialchars($row['email'])
    ];
}

// Prepare the response for DataTables
$response = [
    'draw' => isset($_GET['draw']) ? $_GET['draw'] : 1,
    'recordsTotal' => $total_records,
    'recordsFiltered' => $total_records,
    'data' => $students_data
];

// Return the response as JSON
echo json_encode($response);
exit;
?>
