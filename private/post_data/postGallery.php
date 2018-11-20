<?php

require_once '../conn.php';
include '../functions.php';



?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Post Images</title>
        <link rel="stylesheet" href="../../public/bootstrap4/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../public/css/animate.css">
        <link href="../../public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../.../public/css/home.css">
        <style media="screen">

        </style>
    </head>
    <body>
        
          <!-- nav  -->
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
                <a class="nav-link" href="./catalogue.html">Catalogue</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./postGallery.php">Gallery</a>
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

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Post Image</h2> <hr>

                    <div class="rowk">
                    <form method="post" id="form_post_img">
                        <div class="form-group">
                            <label for="email">Name:</label>
                            <input type="image_name" class="form-control" id="email" placeholder="Enter name" name="img_name" required>
                        </div>
                        <div class="form-group">
                            <label for="customRange">Rate it</label>
                            <input type="range" class="custom-range" id="customRange" name="points1">
                        </div>
                        <div class="form-group">
                        <label for="sel1">Select Image Category:</label>
                            <select name="img_categories" class="form-control custom-select-sm" id="sel1" required>
                                <option value="uncategorized" selected>Default</option>
                                <option value="effects">Effects</option>
                                <option value="solo_img">Solo Images</option>
                                <option value="3d">3d</option>
                            </select>
                        </div>
                        <div class="mb-1">Image</div> 
                        <div class="custom-file mb-3">
                            <!-- <p>Upload Image</p> -->
                            <input type="file" class="custom-file-input" name="img_upload" id="customFile" required>
                            <label class="custom-file-label" for="customFile">Choose Image</label>
                        </div>
                        <!-- <div class="form-group form-check">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div> -->
                        <input type="submit" name="upload_img" class="btn btn-primary" id="upload_img_id" value="Submit" />
                    </form>
                    </div>

                </div>
            </div>
        </div>
        <script type="text/javascript" src="../../public/js/jquery.1.11.1.js"></script>
        <script type="text/javascript" src="../../public/bootstrap4/js/bootstrap.min.js"></script>
        <script>

            $("#form_post_img").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: './upload_img.php',
                    method: 'post',
                    processData: false,
                    contentType: false,
                    data: new FormData(this),
                    success: function(data){
                        $("#form_post_img")[0].reset();
                        // data = JSON.parse(data);
                        console.log(data);
                    },error: function(data){console.log(data);}
    
                })
                
            })
        </script>
    </body>
</html>