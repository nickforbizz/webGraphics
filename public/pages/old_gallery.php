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
      <br>

      <div class="container-fluid">
          <div id="headerGallery">
              <h1 class="text-center">Gallery</h1> <hr>
              <div class"" id="gallery_categories">
                  <!-- <div class="row shadow bg-white text-black d-flex p-2 justify-content-around">
                    <div class="" id="all_panel_nav"> <b>All</b></div>
                    <div class="" id="solo_images_nav"> <b>Solo Images</b></div>
                    <div class="" id="effects_nav"> <b>Effects</b></div>
                    <div class="" id="videos_nav"> <b>Videos</b></div>
                  </div> -->

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





  <div id="myModal" class="modal">
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="modal-content">

            <?php
            $query2 = $conn->query("SELECT * from gallery");
            while ($b = $query2->fetch_assoc()) {
              echo  ' 
                <div class="mySlides">
                  <div class="numbertext">No '.$b['id'].'</div>
                  <img src="../../private/'.$b['link'].'" style="width:100%">
                </div>';
            }
                ?>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
              <p id="caption"></p>
            </div>
            <div class="row " id="row_column">
            <?php
            $query3 = $conn->query("SELECT * from gallery");            
            while ($a = $query3->fetch_assoc()) {  
              echo '
              <div class="caption_imgs">
                <img class="demo4 cursor" src="../../private/'.$a['link'].'" style="width:100%" onclick="currentSlide('.$a['id'].')" alt="'.$a['img_name'].' ">
              </div>';
            }
              ?>
              </div>
      </div>
</div> <!-- #myModal ends -->








       
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



      <!-- footer -->
      <div class="jumbotron text-center bg-footer" id="footer" style="margin-top: 10px; margin-bottom: 0; border-radius: 0; color: white">
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