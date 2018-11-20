<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About The Designs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/gallery.css" />
    <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/animate.css">    
    <link rel="stylesheet" type="text/css" media="screen" href="../css/gallery.css" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <nav class="navbar navbar-expand-md bg_nav_color navbar-dark">
        <a class="navbar-brand" href="../index.html">
        <!-- <img src="../img/Artboard 1.png" alt="LOGO"  width="100px;"> -->
        NICKS
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a class="nav-link" href="../index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./gallery.php">Gallery</a>
            </li>    
            <li class="nav-item">
              <a class="nav-link" href="./blog.php">Blog</a>
            </li>   
            <li class="nav-item">
              <a class="nav-link" href="./catalogue.html">Catalogue</a>
            </li>   
            <li class="nav-item">
              <a class="nav-link" href="./about.html">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./contact.php">Contact</a>
            </li>   
          </ul>
        </div>  
      </nav>
      

      <div class="container-fluid side1" style="background:pink">
          <div id="headerGallery">
              <h1 class="text-center">Gallery</h1> <hr>
              <div class"" id="gallery_categories">
              <div id="myBtnContainer" class=" row justify-content-center">
                <button class="btn_filter btn active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn_filter btn" onclick="filterSelection('effects')"> Effects</button>
                <button class="btn_filter btn" onclick="filterSelection('people')"> People</button>
                <button class="btn_filter btn" onclick="filterSelection('manupilation')"> Manupilation</button>
                <button class="btn_filter btn" onclick="filterSelection('mockups')"> Mock-Ups</button>
                <button class="btn_filter btn" onclick="filterSelection('3d')"> 3-D</button>
              </div>   
              </div>         
          </div><br>


          


          <div class="contentGallery shadow bg-white">             
            <div class="row">
            <div class="col-12" id="all_panel">
              <div class="row justify-content-center">



              <?php
                  require_once('../../private/conn.php');
                  require_once('../../private/functions.php');
                  $query = $conn->query("SELECT * from gallery");
                  while ($a = $query->fetch_assoc()) {                
                    echo '
                      <div class="column_images '.$a['category'].' card shadow col-sm-6 col-md-4 col-lg-3" style="">
                      <div class="portfolio-item content">
                        <div class="hover-bg"  onclick="openModal();currentSlide('.(int) ($a['id']).')">   
                          <div class="hover-text" >
                          <h4>'.ucwords($a['img_name'] ).'</h4>
                          <small>'.$a['category'].'</small>
                          <div class="clearfix"></div>
                        </div>
                        <!-- hover-text end -->
                        <img class="card-img-top responsive"  src="../../private/'.$a['link'].'" width="300px" height="180px" alt="NICKS Design" >
                      </div>                     
                      <!-- hover-bg ends -->
                      </div>
                      <!-- portifolio-item end -->
                      </div>
                      <!-- card end -->
                    
                    ';

                }
              ?>















       
              </div>
              <!-- all panel end -->
            </div>
            <!-- row small end -->

            <div class="row">
              <div class="col-12" id="solo_images">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, delectus nam assumenda maxime rerum impedit pariatur distinctio minus aut, dolores doloremque! Ex consectetur omnis ducimus est assumenda ipsa provident soluta!
              </div>
              <!-- solo_images end -->
            </div>
            <!-- row small end -->

            <div class="row">
              <div class="col-12" id="effects">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab eaque, sint fugiat optio tenetur consequatur neque unde, quidem quo nesciunt quae mollitia. Quia molestias distinctio doloribus labore accusamus illo sint!
              </div>
              <!-- effects end -->
            </div>
            <!-- row small end -->

            <div class="row">
              <div class="col-12" id="videos">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, ut, assumenda tempora perferendis, praesentium deserunt odit totam id earum architecto numquam voluptate maiores repellendus voluptatibus explicabo magnam animi beatae repudiandae!
              </div>
              <!-- videos end -->
            </div>
            <!-- row small end -->
         
            </div>
                <!-- row big end -->
          </div>
          <!-- contentGallery end -->
      </div> 
      <!-- end of container -->

<div class="side2 ">

      <!-- button to close image details -->
      <button class="btn btn-info btn-small mb-4" id="btn-view" style="float: right"> close</button>

      <!-- image title -->
      <div class="mt-4" id="img_title">
          <h3 class="text-center ">Image Title</h3> <hr>
      </div>

      <!-- image -->
      <div class="contain_img d-flex justify-content-center mb-4">
          <div class="big_box_img shadow text-center">
              <img src="blood_splash_2-wallpaper-1920x1080.jpg" height="200px" width="300px" class="w3-ifmage" alt="no image">
          </div>
          <button class="w3-button w3-display-left w3-display-middle w3-black" onclick="plusDivs(-1)">&#10094;</button>
          <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
      </div>

      <!-- description of image -->
      <div class="m-4" id="img_description">
        <div><b>Description</b> </div> 
        <div class="m-2" id="more_details">
              some dummy text here
              some dummy text here
              some dummy text here
        </div>
      </div>

      <!-- user feedback -->
      <div class="user_feeds ">
          <span class="w3-display-left social_btn">Like</span> 
          <span class="w3-display-right social_btn">comment</span>
      </div>

      <!-- share on social media -->
      <div id="social_media">

      </div>
</div>

      <!-- footer -->
      <div class="jumbotron text-center bg-footer" id="footer" style="margin-top: 10px; margin-bottom: 0; border-radius: 0; color: white; z-index: 544!important">
          &copy;Copyright
           <a href="" style="color: gold">Wainaina Nicholas</a> <br>
           social media links here
      </div>

      <!-- js scripts -->
    <script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="../bootstrap4/js/bootstrap.min.js"></script>
    <script src="../js/gallery.js"></script>
</body>
</html>