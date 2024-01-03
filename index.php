<?php

					
					$email = "";
					$password = "";
					
					$error="";
					
					
					
					
					
					
					if(isset($_POST['submit']))
					{
					
					$email = $_POST['email'];
					$password = $_POST['password'];
					$cn = mysqli_connect("localhost", "root", "root", "db_admission");
				 $sql="select * from student where email='".$email."'AND password='".$password."'";
    
    $result=mysqli_query($cn,$sql);
    
    if(mysqli_num_rows($result)==1){
       
								header("location:scholarship.php");

    }
    else{
        								print '<span class = "successMessage">incorrect password</span>';

        
    }
					}
						
?>
<!doctype html>
<html lang="en">

<head>
    <!--============================== Required meta tags ===========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--============================= CSS =======================================-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <title>Student Management</title>
    <link rel="shourtcut icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
    <!--================= Header-area ======================-->
    <div class="header-area header-absoulate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="">
                            <i class="fa fa-home"></i>
                            <span>Team <span id="na">AI</span></span>
                        </a>
                    </div>
                </div>
    <!--================== Main menu-area ====================-->
                <div class="col-md-7">
                    <div class="main-menu">
                        <?php include('component/menu.php'); ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--======================= Slide-area =======================-->
    <div class="welcome-area">
        <div class="owl-carousel slider-content">
            <div class="single-slider-item slider-bg-1">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>We provide Scholarship information</h2>
                                    <p>Education is what remains after one has forgotten<br>
                                        what one has learned in school.

                                        <br><i>Albert Einstein</i>
                                    </p>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-2">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>We provide Scholarship information</h2>
                                    <p>Education is the most powerful weapon<br>
                                        which you can use to change the world.

                                        <br><i>Nelson Mandela</i>
                                    </p>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- login-->
	 <div class="form-area">
<div class="container">
	
		<form action="" method="post">
		<div class="col-md-12">
			<div class="form-input">
			<h5><label for="email">Email</label>
				<input type="text" name="email" placeholder="Enter the Email"/>	
			</div>
			<div class="form-input">
			<h5><label for="password">Password</label><br>
				<input type="password" name="password" placeholder="Password"/>
			</div>
			<a href="signup.php"><h6>Create account</h6></a>
			<input type="submit" name="submit" value="LOGIN"  class="btn-login"/>
			
			
			</div>
		</form>
	</div>
</div>
    <!--========================== Footer-area ===============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="logo">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>Team AI</span>
                            </a>
                            <p> Education is what remains after one has forgotten <br>
                                what one has learned in school.

                                <br><i>Albert Einstein</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index.php">Login</a></li>
             
                               
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <p class="copy-right">Copyright &copy;Team AI</p>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
