<?php 

	include_once 'config.php';

	if(isset($_POST['update'])){
    $id = $_POST['Id'];
    $nama = $_POST['Title'];
    $harga = $_POST['Author'];
    $date = $_POST['Date'];
    $pages = $_POST['Pages'];
    $type = $_POST['Type'];


		$exe = mysqli_query($conn, "UPDATE table1 SET Title='$nama', Author='$harga', Date='$date', Pages='$pages', Type='$type' WHERE Id=$id");

	    header("Location: index.php");
	}

?>

<?php
	$id = $_GET['Id'];

	$result = mysqli_query($conn, "SELECT * FROM table1 WHERE id=$id");

	while ($row = mysqli_fetch_array($result)) {
    $nama = $row['Title'];
    $harga = $row['Author'];
    $date = $row['Date'];
    $pages = $row['Pages'];
    $type = $row['Type'];
		$gambar = $row['Gambar'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit list of book</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'snippets/styles.php'; ?>

</head>
<body>
    <div class="hero-wrap hero-bread" style="background-image: url('images/add.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Edit list</h1>
          </div>
        </div>
      </div>
    </div>

    <form action="edit.php" class="bg-white p-5 contact-form" method="post">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Title" name="Title" value=<?php echo $nama; ?>>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Author" name="Author" value=<?php echo $harga; ?>>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Date published" name="Date" value=<?php echo $date; ?>>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Number of pages" name="Pages" value=<?php echo $pages; ?>>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Type of book" name="Type" value=<?php echo $type; ?>>
      </div>
      <div class="form-group">
      	<input type="hidden" name="Id" value=<?php echo $id; ?>>
        <input type="submit" value="Update list of books" name="update" class="btn btn-primary py-3 px-5">
      </div>
    </form>
    <?php include 'snippets/scripts.php'; ?>
</body>
</html>