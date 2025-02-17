<?php
session_start();

if(!  isset($_SESSION["authUser"]) )
{
    return header("location:index.php");
}

?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


    <!-- Include jQuery and DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#studentTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url": "datatable.php", // Point to the PHP script
                    "type": "GET",
                    "data": function(d) {
                        // Pass the search and pagination parameters to the server
                        d.length = $('#studentTable_length select').val();  // Number of records per page
                        d.start = d.start; // Pagination offset
                        d.search = d.search; // Search term
                    }
                },
                "pageLength": 10, // Default number of records per page
                "lengthMenu": [10, 25, 50, 100], // Options for records per page
                "searching": true, // Enable searching
                "paging": true, // Enable pagination
                "ordering": true, // Enable column sorting
                "info": true, // Display page info
                "language": {
                    "search": "Filter records:",
                    "lengthMenu": "Show _MENU_ records per page"
                },
                columns: [
                    { data: 'id' },
                    { data: 'first_name' },
                    { data: 'last_name' },
                    { data: 'date_of_birth' },
                    { data: 'stream' },
                    { data: 'semester' },
                    { data: 'address' },
                    { data: 'city' },
                    { data: 'pin' },
                    { data: 'contact_number' },
                    { data: 'email' },
                    { data: 'action' }
                ],
                "columnDefs": [ {
                "targets": 11, // Action field coloum index start with 0
                "data": "action",
                "render": function ( data, type, full, meta ) {
                    return `
                        <a class="btn btn-warning btn-sm" 
                            href="update_student.php?id=`+full.id+`"
                        >
                            Edit
                        </a>
                        <a href="delete_student.php?id=`+full.id+`" 
                            class="btn btn-danger btn-sm" 
                            onclick="return confirm('Are you sure?');"
                        >
                            Delete
                        </a>
                    `;
 
                }
              } ],
            });
        });
    </script>
</head>

<body class="home-4">

    <?php
        include('header.php');
    ?>

    <section id="bi-about-4" class="bi-about-section-4">
		<div class="">
			
        <table id="studentTable" class="table table-striped table-bordered">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Stream</th>
                    <th>Sem</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Pin</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be populated here by DataTables -->
            </tbody>
        </table>

		</div>
	</section>
	

</body>

</html>