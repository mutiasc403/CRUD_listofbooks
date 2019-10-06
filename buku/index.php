<?php 
    include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include 'snippets/styles.php'; ?>

</head>

<body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand">List of books</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>
        </div>
      </nav>
<!-- END nav -->

    <section id="home-section" class="hero">
    	  <div class="home-slider owl-carousel">
          <div class="slider-item" style="background-image: url(images/book.jpg);">
          	<div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 ftco-animate text-center">
                  <h1 class="mb-2">“Book is a window to the world.”</h1>
                  <h2 class="subheading mb-4">Don't forget to read a book every day</h2>
                </div>

              </div>
            </div>
          </div>

          <div class="slider-item" style="background-image: url(images/lib.jpg);">
          	<div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-sm-12 ftco-animate text-center">
                  <h1 class="mb-2">“A room without books is like a body without a soul.”</h1>
                  <h2 class="subheading mb-4">Don't forget to read a book every day</h2>
                </div>

              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">List of books</h2>
          </div>
        </div>   		
        <a class="btn btn-primary py-3 px-5" href="add.php">+ Add list</a> <br><br>
    	</div>

    	<div class="container">
    		<div class="row">

          <?php
            $result = mysqli_query($conn, "SELECT * from table1");
            foreach($result as $row) : 
          ?>
      			<div class="col-md-6 col-lg-3 ftco-animate">
      				<div class="product">
      					<a href="#" class="img-prod"><img class="img-fluid" src=<?php echo $row["Gambar"];?> alt="Image error">
                <div class="overlay"></div>
              </a>
      					<div class="text py-3 pb-4 px-3 text-center">
      						<h3><a href="#"><?php echo $row["Title"];?></a></h3>
      						<div class="d-flex">
      							<div class="pricing">
      	    						<p class="price"><span class="price-sale">Author : <?php echo $row["Author"]; ?></span></p>
                        <p class="price"><span class="price-sale">Date : <?php echo $row["Date"]; ?></span></p>
                        <p class="price"><span class="price-sale">Pages : <?php echo $row["Pages"]; ?></span></p>
                        <p class="price"><span class="price-sale">Type : <?php echo $row["Type"]; ?></span></p>
      	    					</div>
          					</div>
          					<div class="bottom-area d-flex px-3">
          						<div class="m-auto d-flex">		
          							<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
          								<span><i class="ion-ios-cart"></i></span>
          							</a>
      							</div>
      						</div>
      					</div>
                <?php echo "
                  <a style='margin-left: 3%' href=\"edit.php?Id=$row[Id]\">Update</a>
                  <a style='margin-left: 50%' href=\"delete.php?Id=$row[Id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> "
                ?>
      				</div>
      			</div>
          <?php 
              endforeach; 
          ?>     

    		</div>
    	</div>

    <hr>

    <footer class="ftco-footer ftco-section">
        <div class="container">
          	<div class="row">
          		<div class="mouse">
    				<a href="#" class="mouse-icon">
    					<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
    				</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <?php include 'snippets/scripts.php'; ?>

</body>
</html>