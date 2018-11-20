<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Design</title>
  <link rel="stylesheet" href="../public/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/animate.css">
  <!-- <link rel="stylesheet" href="../public/css/gallery.css"> -->
  <link rel="stylesheet" href="../public/css/w3.css">
  <link href="../public/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <style media="screen">

.box_img{
    height: 90px;
    width: 100px;
    margin: 10px;
    float: left;
    border: 2px solid grey;
    cursor: pointer !important;
    background: crimson;
}

.sideB{
    float:left;
}
#box_img01{
    width: 5vw;
    height: 100vh;
    background: rgb(40, 58, 61);
}
#box_img02{
    height: 100vh;
    background: rebeccapurple;
}
.full_img{
    width:400px;
    height: 350px;
    background: greenyellow;
    margin-top: 10%;
    margin-left: 9%;
}
.main-container{
    background: rgb(218, 130, 58);
    /* height:91vh; */
    margin: 0;
    width:100vw;
    overflow:hidden;
    position:relative;
}
.side2{
    display: none;
    position: absolute;
    /* width: 50%; */
    right: 0px;
    padding: 10px;
    z-index: 344;
    top: 0px;
    height: 96vh;
    background: #9f5ae4;
}
.side1{
    background: rgb(36, 22, 22);
    min-height: 100%;
    width: 100%;
}
/* animate right */
.animate-right{
    display: block;
    animation:animateright 0.8s
 }
 @keyframes animateright{
     from{
         right:-300px;
        opacity:0
    }to{
        right:0;
        opacity:1
    }
}

.big_box_img{
    height: 100%;
    width: 300px;
    border: 1px solid gray;
}
.contain_img{
    position: relative;
}
#more_details{
    border-left: 5px solid #d4b7b7;
    padding: 0 0 4px 7px;
}
.user_feeds{
    position: relative;
    margin-top: 40px;
}
.social_btn{
    background: #032305a6;
    padding: 5px 10px 5px 10px;
    color: white;
    border-radius: 8px;
    cursor: pointer;
}
#gallery_categories>div>div{
    /* color: brown; */
    cursor: pointer;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 10px;
    padding: 10px;
}
.btn.active {
	background-color: #644c81;
	color: white;
  }
  .btn_filter{
      margin-left:3px;
  }



/* Gallery Section 
==============================*/
#works-section {
	padding: 120px 0;
	background-color: #f6f6f6;
}
.categories {
	padding-bottom: 30px;
	text-align: center;
}
ul.cat li {
	display: inline-block;
}
ol.type li {
	display: inline-block;
	margin-left: 20px;
}
ol.type li a {
	color: #aaa;
	border: 1px solid #ddd;
	padding: 8px 16px;
	border-radius: 0;
}
ol.type li a.active {
	color: #0dad8d;
	border: 1px solid #0dad8d;
}
ol.type li a:hover {
	color: #0dad8d;
	border: 1px solid #0dad8d;
}
.isotope-item {
	z-index: 2
}
.isotope-hidden.isotope-item {
	z-index: 1
}
.isotope, .isotope .isotope-item {
	/* change duration value to whatever you like */
	-webkit-transition-duration: 0.8s;
	-moz-transition-duration: 0.8s;
	transition-duration: 0.8s;
}
.isotope-item {
	margin-right: -1px;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.isotope {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transition-property: height, width;
	-moz-transition-property: height, width;
	transition-property: height, width;
}
.isotope .isotope-item {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transition-property: -webkit-transform, opacity;
	-moz-transition-property: -moz-transform, opacity;
	transition-property: transform, opacity;
}
.portfolio-item {
	/* margin-bottom: 30px; */
}
.portfolio-item .hover-bg {
	height: 170px;
	overflow: hidden;
	position: relative;
}
.hover-bg .hover-text {
	position: absolute;
	text-align: center;
	margin: 0 auto;
	color: #ffffff;
	background: rgba(0, 0, 0, 0.66);
	padding: 17% 0 0 0;
	height: 100%;
	width: 100%;
	opacity: 0;
	transition: all 0.5s;
}
.hover-bg .hover-text>h4 {
	opacity: 0;
	-webkit-transform: translateY(100%);
	transform: translateY(100%);
	transition: all 0.3s;
	color: #ffffff;
}
.hover-bg:hover .hover-text>h4 {
	opacity: 1;
	-webkit-backface-visibility: hidden;
	-webkit-transform: translateY(0);
	transform: translateY(0);
}
.hover-bg .hover-text>i {
	opacity: 0;
	-webkit-transform: translateY(0);
	transform: translateY(0);
	transition: all 0.3s;
}
.hover-bg:hover .hover-text>i {
	opacity: 1;
	-webkit-backface-visibility: hidden;
	-webkit-transform: translateY(100%);
	transform: translateY(100%);
}
.hover-bg:hover .hover-text {
	opacity: 1;
}
#works-section i.fa {
	height: 30px;
	width: 30px;
	border: 1px solid #F5AB35;
	font-size: 20px;
	padding: 5px;
	border-radius: 50%;
	color: #F5AB35;
}
/* About Section */
#about-section {
	padding: 120px 0;
}
#about-section p {
	margin-top: 20px;
	margin-bottom: 30px;
}

/* Style the buttons */

  
  .btn:hover {
	/* background-color: #ddd; */
  }
  
  .btn.active {
	background-color: #644c81;
	color: white;
  }
  * {
    box-sizing: border-box;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 0 -16px 0 -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column_images {
    padding: 0;
}

/* Create three equal columns that floats next to each other */
.column_images {
    float: left;
    width: 33.33%;
    display: none; /* Hide all elements by default */
    margin: 0 15px 15px 0 !important;
    padding: 0;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    backgrouCnd-color: white;
    /* padding: 10px; */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}


  
  </style>
</head>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
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


    <div class="row main-container">

        <div class="side1 ">

              <div class="mb-5" id="headerGallery">
              <h1 class="text-center">Gallery</h1> <hr>
              <div class"" id="gallery_categories">
              <div id="myBtnContainer" class=" row justify-content-center">
                <button class="btn_filter btn mb-4 active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn_filter btn mb-4" onclick="filterSelection('effects')"> Effects</button>
                <button class="btn_filter btn mb-4" onclick="filterSelection('people')"> People</button>
                <button class="btn_filter btn mb-4" onclick="filterSelection('manupilation')"> Manupilation</button>
                <button class="btn_filter btn mb-4" onclick="filterSelection('mockups')"> Mock-Ups</button>
                <button class="btn_filter btn mb-4" onclick="filterSelection('3d')"> 3-D</button>
              </div>   
              </div>         
            </div>

            <div class="col-12" id="all_panel">
              <div class="row justify-content-center">


<!-- openModal();currentSlide('.(int) ($a['id']).') -->
              <?php
                  require_once('../private/conn.php');
                  require_once('../private/functions.php');
                  $query = $conn->query("SELECT * from gallery");
                  while ($a = $query->fetch_assoc()) {                
                    echo '
                      <div class="column_images '.$a['category'].' card shadow col-sm-6 col-md-4 col-lg-3" style="">
                      <div class="portfolio-item content">
                        <div class="hover-bg"  onclick="openImgDetails(`'. $a['category'] .'`)">   
                          <div class="hover-text" >
                          <h4>'.ucwords($a['img_name'] ).'</h4>
                          <small>'.$a['category'].'</small>
                          <div class="clearfix"></div>
                        </div>
                        <!-- hover-text end -->
                        <img class="card-img-top responsive"  src="../private/'.$a['link'].'" width="300px" height="180px" alt="NICKS Design" >
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

                <button class="btn btn-info btn-small" id="btn-preview">Preview</button>
        </div>
        <div class="side2 ">

                <!-- button to close image details -->
                <button class="btn btn-info btn-small mb-4" id="btn-view" style="float: right"> close</button>

                <!-- image title -->
                <?php
                  require_once('../private/conn.php');
                  require_once('../private/functions.php');
                  $query2 = $conn->query("SELECT * from gallery");
                     while ($b = $query2->fetch_assoc()) { 

                    echo '<div class="mySlides">
                        <div class=" mt-4" id="img_title">
                            <h3 class="text-center ">'. ucfirst($b['img_name']) .'</h3> <hr>
                        </div>
                        
                        <!-- image -->
                        <div class="contain_img d-flex justify-content-center mb-4">
                            <div class="big_box_img shadow text-center">
                                <img src="../private/'.$b['link'].'" height="100%" width="100%" class="w3-image" alt="no image">
                            </div>
                            
                            <button class="w3-button w3-display-left w3-display-middle w3-black" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>
                            
                        </div>
                    
                    
                        <!-- author of image -->
                         <div class="m-4" id="img_description">
                            <div><b>Possted By: </b> </div> 
                            <div class="m-2" id="more_details">
                                <i>'. $b['posted_by'] .'</i>
                            </div>
                         </div>

                         <!-- category of image -->
                         <div class="m-4" id="img_description">
                            <div><b>Category: </b> </div> 
                            <div class="m-2" id="more_details">
                                <i>'. $b['category'] .'</i>
                            </div>
                         </div>
                            
                            </div>';
                        }
                        ?>

                <!-- user feedback -->
                <div class="user_feeds ">
                    <span class="w3-display-left social_btn">Like</span> 
                    <span class="w3-display-right social_btn">comment</span>
                </div>

                <!-- share on social media -->
                <div id="social_media">

                </div>
        </div>

      </div>











<body>



    <script type="text/javascript" src="../public/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="../public//bootstrap4/js/bootstrap.min.js"></script>
  <script type="text/javascript">
//    $("#form_post_img").submit(function (e) {
//     e.preventDefault();

function animateLeft(id) {
    some_img = $("#box_img"+id).html();
    $(".full_img").html(some_img);
    console.log(some_img);
    
    
}

$("#hideDetails").click(function () {
    $("#sideDetails").addClass("animate-left")
})
    
//     $.ajax({
//         url: './process_user.php',
//         method: 'post',
//         processData: false,
//         contentType: false,
//         data: new FormData(this),
//         success: function (data) {
//             $("#form_post_img")[0].reset();   
//             console.log(data);
            
//         },
//         error: function (data) {
//             console.log(data);
            
//         }
//     })

// })

// $(document).on("click", ".box_img", function () {
//     alert()
//     $(".whole").animate({

//     })
// })

var animate_to_left = document.querySelector(".box_img");

// animate_to_left.addEventListener("click", animateLeft);

// $("#box_img01").click(function () {
//     console.log("hello world");
//     alert()
    
// })

$(window).resize( function () {
    box1_width = $("#box_img02").innerWidth();
    // console.log(box1_width);
    
});


 function openImgDetails(cat) { 

     
    
    $(".side2").addClass('animate-right');

    if ($("body").width() <= '576') {
        console.log("width mobile");
        $(".side2").css({"width":"100%"})
        $(".side1").css({"height":"92vh"})
        // $() 
    }else if ($("body").width() >= '577'){
        $(".side2").css({"width":"50%","height":"100%"})      
        console.log("width desktop");        
    }

    $(".side1").animate({
        width: '50%',
    },"slow")
    

};


$(document).on("click", "#btn-view", function () {
    $(".side2").addClass('w3-animate-left');
    $(".side1").animate({
        width: '100%',
    },"slow")
    $(".side2").removeClass('w3-animate-left');
    $(".side2").removeClass('animate-right');
    $(".side2").removeClass('animate-right_fully');
    
})

// slide Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}



// filter images
filterSelection("all")
function filterSelection(c) {
  var x, i;
  console.log("some dumm");
  
  x = document.getElementsByClassName("column_images");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn_filter");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
// filter images ends


  </script>
</body>
</html>