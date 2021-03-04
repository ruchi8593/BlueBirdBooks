<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name = "author" content = "Prachi Bansal" />
<meta name = "keywords" content = "It services provider, WebTree, Web services Provider, It company">
<meta name = "description" content = "WebTree is an IT company which pledges to provide the best IT services which will help you to expand your business and target your customers. ">
<link rel="icon" href="images/main-logo.jpg" type="image/x-icon"> 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Blue Bird Books</title>
<style>
  * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
  </style>
</head>
<body>
<div class="container-fluid px-0 bg-grey">
<!-- Header -->
  <header class="theme-bg-black" role="banner">
    <div class="container py-3">
      <div class="row top-header">
        <div class="col-6 social-icons"> 
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f mr-2" style="color: white;"></i></a>
            <a href="https://mail.google.com/" target="_blank"><i class="fab fa-google mr-2" style="color: white;"></i></a>		 
		    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter mr-2" style="color: white;"></i></a>
			</div>
        <div class="col-6"><a href="contact.html"><span class="float-right">Contact Us</span></a></div>
      </div>
    </div>
  </header>
<!-- Main Nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white" id="main_nav" role="navigation">
    <div class="container"> 
		<a class="navbar-brand" href="index.html">
			<img src="images/logo.png" class="img-fluid" alt="Logo" width="80px" height="80px"/>
		</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
		  <span class="navbar-toggler-icon"></span> 
	  </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
			<li class="nav-item"> <a class="nav-link" href="index.html">HOME</a><div class="underline"></div> </li>
            <li class="nav-item active"> <a class="nav-link" href="books.php">BOOKS</a><div class="underline"></div> </li>
            <li class="nav-item"> <a class="nav-link" href="checkout.php">CHECK OUT</a><div class="underline"></div> </li>
		</ul>
      </div>
    </div>
  </nav>
  <!-- books data -->
  
  <div class="container py-7">
  <h2 class="mt-4">Featured Resources </h2>
    <div class="row mt-5">
      
  <?php
  
    require("mysqli_connect.php");
    $query = "select * from inventory";
    $result = @mysqli_query($dbc, $query);
    $check_book = mysqli_num_rows($result) > 0;

    if($check_book){
      while($row = mysqli_fetch_array($result))
      {
        //setcookie($book_id,$row['book_id']);
        
        //$id = $row['book_id'];
        //$name = $row['book_name'];
        //$price = $row['price'];
      
  ?>
  <div class="col-md-3 mt-2 mb-4">
        <div class="card">
        <img src ='images/<?php echo $row['image'] ?>' width = '100%' height='200' alt='Book images'></img>
          <div class="card-body">
          <form action="checkout.php" method = "post">
            <h4 class="card-title"><?php echo $row['book_name']; ?></h4>
            <p class="card-text"><?php echo "$ ". $row['price']; ?></p>
            <input type="hidden" name="bookname" value=<?php echo $row['book_id']; ?>>
            <input type = "submit" name="addtocart" class="btn btn-book" value="Buy Now" id =>
      </form>
          </div>
        </div>
    </div>

  <?php

      }
    }
    else{
      echo "Sorry!!No Book found..";
    }

    

  ?>
    
    </div>
  </div>
     
 
<!-- Footer -->	
  <footer class="bg-dark text-white" role="contentinfo">
    
	
	  <div class="container py-md-4 text-center">
		  <div class="row">
          <div class="col-md-12 grey-font">
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f mr-2" style="color: white;"></i></a>
          <a href="https://mail.google.com/" target="_blank"><i class="fab fa-google mr-2" style="color: white;"></i></a>		 
		      <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter mr-2" style="color: white;"></i></a>
				  </div>
			  <div class="col-md-12">
		<h6>&copy; 2021 | All Rights Reserved.</h6>
				  </div>
			  </div>
	  </div>
  </footer>
</div>

<!-- Optional JavaScript --> 
<script src="js/jquery-3.4.1.slim.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script> 
<script src="https://kit.fontawesome.com/2b63d8a8a8.js" crossorigin="anonymous"></script>
</body>
</html>