<?php 
	include_once 'config.php';

	$id = $_GET['Id'];

	$exe = mysqli_query($conn, "DELETE FROM table1 WHERE Id=$id");

	echo "
        <script>
            alert ('Deleting data successfully');
            window.location.href='index.php';
        </script>
        ";
?>