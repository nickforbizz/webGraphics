

<?php
header("Location: folder_login/login.php");

?>



















<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Design</title>
  <link rel="stylesheet" href="../public/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/animate.css">
  <link href="../public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/home.css">

  <style media="screen">

  </style>
</head>

<body>



  <!-- nav  -->
  <nav class="navbar navbar-expand-sm fixed-top" id="nav">
    <div class="navbar-header text-white">
      <!-- <a href="#" class="navbar-brand"><img src="./img/Artboard 1.png" alt="LOGO"  width="100px;"></a> -->
    </div>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavToggler">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="myNavToggler">
      <div class="navbar-nav ml-auto">
        <a href="./index.html" class="active nav-item nav-link">Home </a>
        <a href="./pages/about.html" class="nav-item nav-link">   About </a>
        <a href="./pages/catalogue.html" class="nav-item nav-link">Catalogue  </a>
        <a href="./pages/gallery.php" class="nav-item nav-link">Gallery  </a>
        <a href="./pages/blog.php" class="nav-item nav-link">Blog   </a>
        <a href="./pages/contact.php" class="nav-item nav-link">Contact</a>
        <div class="nav-item nav-link">
          <!-- <form method="get" action="/search" id="search">
            <input id="searchInput" name="q" type="text" size="40" placeholder="Search...">
          </form> -->
        </div>
      </div>
    </div>
  </nav>


  <div class="row" id="main_area">
    <div class="col-sm-12 col-md-2 bg-white" id="side_area">
       <div class="" id="accordion1">
         <div class="card" id="card_accordion1">
          <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseNick">Collapse Settings </a>
          </div>
          <div id="collapseNick" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed dolor maxime vitae optio libero quae, quasi unde eligendi dignissimos accusantium nulla aperiam et nemo odit nisi delectus! Perferendis, fuga necessitatibus!
            </div>
          </div>
         </div> 
       </div>
       <!-- accordion ends -->


    </div>
    <!-- side_area ends -->
    <div class="col-sm-12 col-md-10 bg-success" id="content_area">

    </div>
    <!-- side_area ends -->
  </div>
  <!-- main_area ends -->
  <script type="text/javascript" src="../public/js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="../public/bootstrap4/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../public/js/home.js"></script>
  <script type="text/javascript">
   
  </script>

</body>

</html>
