<?php
include 'connection.php'; 

$limit = 10; // Number of students per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Count total students for pagination
$countQuery = "SELECT COUNT(*) AS total FROM std_registration";
$countResult = $connection->query($countQuery);
$totalStudents = $countResult->fetch_assoc()['total'];
$totalPages = ceil($totalStudents / $limit);

// Fetch students with pagination
$sql = "SELECT * FROM std_registration ORDER BY id DESC LIMIT $limit OFFSET $offset";
$result = $connection->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>
    <!-- Bootstrap & DataTables CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Registered Students</h2>

    <a href="registration.php" class="btn btn-primary btn-sm">
        Add Student
    </a>

    
    <table id="studentsTable" class="table table-striped table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>Stream</th>
                <th>Semester</th>
                <th>Address</th>
                <th>City</th>
                <th>Pin</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= htmlspecialchars($row['first_name']); ?></td>
                    <td><?= htmlspecialchars($row['last_name']); ?></td>
                    <td><?= $row['date_of_birth']; ?></td>
                    <td><?= htmlspecialchars($row['stream']); ?></td>
                    <td><?= htmlspecialchars($row['semester']); ?></td>
                    <td><?= htmlspecialchars($row['address']); ?></td>
                    <td><?= htmlspecialchars($row['city']); ?></td>
                    <td><?= htmlspecialchars($row['pin']); ?></td>
                    <td><?= htmlspecialchars($row['contact_number']); ?></td>
                    <td><?= htmlspecialchars($row['email']); ?></td>
                    <td>

                        <a href="update_student.php?id=<?= $row['id']; ?>" 
                            class="btn btn-warning btn-sm" 
                        >
                            Edit
                        </a>

                        <!-- Delete Button -->
                        <a href="delete_student.php?id=<?= $row['id']; ?>" 
                            class="btn btn-danger btn-sm" 
                            onclick="return confirm('Are you sure?');"
                        >
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <nav>
        <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                <li class="page-item <?= ($i == $page) ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>

<!-- Bootstrap & DataTables JS -->
<script src="bootstrap.bundle.min.js"></script>
<script src="jquery-3.7.1.min.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script src="dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#studentsTable').DataTable({
            "paging": false,  // Disable internal DataTable paging since we use server-side pagination
            "searching": true,
            "ordering": true,
            "info": false
        });
    });
</script>

</body>
</html>

<?php $connection->close(); ?>
