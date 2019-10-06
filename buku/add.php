<?php 
  include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add list of book</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'snippets/styles.php'; ?>

</head>
<body>

    <div class="hero-wrap hero-bread" style="background-image: url('images/add.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Add list</h1>
          </div>
        </div>
      </div>
    </div>

    <form action="add.php" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Title" name="Title">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Author" name="Author">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Date published" name="Date">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Number of pages" name="Pages">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Type of book" name="Type">
      </div>
      <div class="form-group">
        Select Image Files to Upload:
        <input type="file" name="files[]" multiple>
      </div>
      <div class="form-group">
        <input type="submit" value="Update list of books" name="add" class="btn btn-primary py-3 px-5">
      </div>
    </form>

    <?php include 'snippets/scripts.php'; ?>
</body>
</html>

<?php 

  if(isset($_POST['add'])){
    $id = $_POST['Id'];
    $nama = $_POST['Title'];
    $harga = $_POST['Author'];
    $date = $_POST['Date'];
    $pages = $_POST['Pages'];
    $type = $_POST['Type'];

    $targetDir = "images/";
    $allowTypes = array('jpg','png','jpeg','gif');

    $imgName = "";
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){

            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    // $insertValuesSQL .= "('".$fileName."', NOW()),";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }

          $imgName = $fileName;
        }

    }else{
        $statusMsg = 'Please select a file to upload.';
    }

    $exe = mysqli_query($conn, "INSERT INTO table1 (Title, Author, Date, Pages, Type, Gambar) VALUES ('$nama', '$harga', '$date', '$pages', '&type', '$imgName')");

    echo "
        <script>
            alert ('Add new data successfully');
            window.location.href='index.php';
        </script>
        ";
  }

?>