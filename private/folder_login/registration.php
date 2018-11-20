
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
		<link rel="stylesheet" href="../../public/bootstrap4/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../public/css/animate.css">
        <link href="../../public/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style media="screen">
	body{
		/* background: url(../img/laptop_3-wallpaper-1920x1080.jpg); */
	}
	#form_img{
		/* border-radius: 25%; */
		display: none;
	}
	#label_img{
		background: aqua;
		border: 1px solid black;
		height: 120px;
		width: 150px;
		border-radius: 50%;
		text-align: center;
		padding-top: 30px;
		transition: all 0.5s;
	}
	#label_img:hover{
		cursor:pointer;
		border-radius:4%;
		color: red; 
		font-weight: bold;
		border: 4px solid black;
	}
</style>
</head>
<body>
	<div class="" style="position:fixed;height:100%;width:100%;background-image:url(../img/laptop_3-wallpaper-1920x1080.jpg);z-index:-1;filter:blur(5px)">

	</div>
<?php
	require_once('./../conn.php');

    // If form submitted, insert values into the database.
		function validateStudent($name){
			$name = trim($name);
			$name = stripslashes($name);
			$name = htmlspecialchars($name);
			return $name;
		}
    if (isset($_POST['username'])){

				$username = validateStudent($_POST['username']); // removes backslashes
				$email = validateStudent($_POST['email']);
				$trn_date = date("Y-m-d H:i:s");
				$password = validateStudent($_POST['password']);
				$password_hash = md5($password);
				$image_title_default = "img_default";

				// check if username and email exists
				$check_existing_user = $conn->query("SELECT username , email FROM design_users WHERE username = '$username' AND email = '$email'");
				if ($check_existing_user->fetch_assoc() > 0) {
					echo '
					<div class="container" >
							<div class="row"  style="margin-top: 3% !important;" >
							<div class="" style="margin: auto;">
									<div class="well"  style="padding:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top:25%">
									<h1 class="text-center">Username Or Email Already Exists</h1> <br><br>
									<h3 style="color:blue;" class="text-center">Try different Values ... </h3>
									<a href="registration.php" class="btn btn-lg btn-danger btn-block">Regester.</a>
									</div>
								</div>
								</div>
						</div>';

						die();
				}

				if ($_FILES['file']['size'] != 0) {
					# code...

						$file_ext = strtolower(end(explode('.', $_FILES['file']['name']) ));
						$ok = 1;
						$time=time();
						$location = "./../uploads/userImgs/";
						$locationDb = "userImgs/";
						$image_title = $_FILES['file']['name'];
						$expensions = array("gif", "jpeg", "jpg", "png");

						$filetype = strtolower(end(explode('/', $_FILES['file']["type"])));
						
							// check the file type and set $ok var
						if (in_array($file_ext, $expensions) === false ){
							echo "please Upload images Only".'<br>';
							$ok = 0;
							die();
						}
						move_uploaded_file($_FILES['file']['tmp_name'],$location.$time.".".$filetype);

						$db_img_link = $locationDb.$time.".".$filetype;
					
						$query = "INSERT into `design_users` (username, user_password, email, date_created, imageTitle, img_link) VALUES ('$username', '$password_hash', '$email', '$trn_date', '$image_title', '$db_img_link')";
						$result = $conn->query($query);
				}else {
						$query = "INSERT into `design_users` (username, user_password, email, date_created, imageTitle, img_link) VALUES ('$username', '$password_hash', '$email', '$trn_date', '$image_title_default', 'userImgs/img_default.png')";
						$result = $conn->query($query);
				}
				if($result){
					echo '
					<div class="container" >
							<div class="row"  style="margin-top: 15% !important;" >
							<div class="" style="margin: auto;">
									<div class="well"  style="padding:20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top:25%">
									<h1 class="text-center">Succesfully Regestered</h1> <br><br>
									<h3 style="color:blue;" class="text-center">Enter Your Credentials To ... </h3>
									<a href="login.php" class="btn btn-lg btn-danger btn-block">Log In.</a>
									</div>
								</div>
								</div>
						</div>';
				}

	}else{

		?>




<div class="container" >
		<div class="row"  style="margin-top: 3% !important;" >
				<div class="" style="margin: auto">
						<div class="login-panel panel panel-default" id="changeDiv" style=' box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 400px; padding: 20px;'>
								<div class="panel-heading">
										<h3 class="panel-title text-center" style="font-weight:bold"> Registration</h3> <hr>
								</div>
								<div class="panel-body">
										<form role="form" method="post" enctype="multipart/form-data">
												<div class="form-group text-center">
													<b>Add an image</b> <br>
													<label id="label_img"> Click to <br/> Upload Img
														<input class="form-control " id="form_img" name="file" type="file" />
													</label>
												</div>
														<div class="form-group">
																<input class="form-control " placeholder="Username" name="username" type="text" autofocus required/>
														</div>
														<div class="form-group">
																<input class="form-control " placeholder="E-Mail" name="email" type="email" autofocus required/>
														</div>
														<div class="form-group">
																<input class="form-control" placeholder="Password" name="password" type="password" value="">
														</div>
														<div class="checkbox">
																<label>
																		<!-- <input name="remember" type="checkbox" value="Remember Me"> Remember Me -->
																</label>
														</div>
														<!-- Change this to a button or input when using this as a form -->
														<button type="submit" name="regester"  class="btn btn-lg btn-success btn-block">Register</button><br>
												<!-- </fieldset> -->
										</form> <br>
										<div class="well">
											<h3 style="color:blue;" class="text-center">Already Registered? </h3>
											<a href="login.php" class="btn btn-lg btn-danger btn-block">LOG IN</a>

										</div>
								</div>
						</div>
				</div>
		</div>
</div>

<!-- jQuery -->
<!-- jQuery -->

<?php } ?>
<script type="text/javascript" src="../../public/js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="../../public/bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>
