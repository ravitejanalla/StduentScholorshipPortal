
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
 <div class="modal-body row mt-2">
 
	 <form action="" method="post">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h5 style="text-align: center;">Filters</h5>
            </div>
            <div class="card-body">
              <form>
                  <div class="mb-5"><label>Authority : </label>
                  <div style="float: right; margin-right: 25px">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="Government" name="authority" value="Government">
                      <label class="custom-control-label" for="Government">Government</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="NGO" name="authority" value="Ngo">
                        <label class="custom-control-label" for="NGO">NGO</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="Private" name="authority" value="Private">
                        <label class="custom-control-label" for="Private">Private</label>
                    </div>
                  </div>
                </div>
                
                <label>Category : </label>
                <select class="browser-default custom-select mb-4" name="category" id="category">
                    <option >Choose option</option>
                    <option >SC</option>
                    <option >ST</option>
                    <option >EBC</option>
                    <option >OBC</option>
                    <option >General</option>
                </select>

                <label>Region : </label>
                <select class="browser-default custom-select mb-4" name="region" id="region">
                    <option >Choose option</option>
                    <option >India</option>
                    <option >Maharashtra</option>
                    <option >Karnataka</option>
                    <option >Uttar Pradesh</option>
                    <option >West Bengal</option>
                </select>                

                <label>Highest Qualification : </label>
                <select class="browser-default custom-select mb-4" name="qualification" id="qualification">
                    <option >Choose option</option>
                    <option >10</option>
                    <option >12</option>
                    <option >Graduate</option>
                </select>  

                <input type="submit" name="submit" value="Apply"  class="btn-login"/>
           
            </div>
          </div>
        </div>
        <div class="col-md-9">
        <div class="row mx-auto" id="scholardetails">
		<table>
		<thead>
		<tr>
		<th>id</th>
		<th>sname</th>
		<th>authority</th>
		<th>aname</th>
		<th>category</th>
		<th>spass</th>
		<th>cutoff</th>
		<th>state</th>
		<th>applbranchtotal</th>
		<th>applbranch</th>
		<th>incomelimit</th>
		<th>benifit</th>
		<th>link</th>
		</tr>
		</thead>
		
		
          <?php

					
					
					$region = "";
					
					$id= "";
			$sname= "";
			$authority= "";
			$aname= "";
			$category= "";
			$spass= "";
			$cutoff= "";
			$state= "";
			$applbranchtotal= "";
			$applbranch= "";
			$incomelimit= "";
			$benefit= "";
			$link= "";
			$qualification="";
					
					
					if(isset($_POST['submit']))
					{
					
					$authority = $_POST['authority'];
					$region = $_POST['region'];
					$category = $_POST['category'];
					$qualification=$_POST['qualification'];
					$cn = mysqli_connect("localhost", "root", "root", "superschool");
				 $sql="select * from sch where authority='".$authority."'AND state='".$region."'AND category='".$category."' AND spass='".$qualification."'";
    
    $result=mysqli_query($cn,$sql);
    if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$id= $row['id'];
			$sname= $row['sname'];
			$authority= $row['authority'];
			$aname= $row['aname'];
			$category= $row['category'];
			$spass= $row['spass'];
			$cutoff= $row['cutoff'];
			$state= $row['state'];
			$applbranchtotal= $row['applbranchtotal'];
			$applbranch= $row['applbranch'];
			$incomelimit= $row['incomelimit'];
			$benefit= $row['benifit'];
			$link= $row['link'];
			?>
			<tr>
			<td><?php echo $id;?></td>
			<td><?php echo $sname;?></td>
			<td><?php echo $authority;?></td>
			<td><?php echo $aname;?></td>
			<td><?php echo $category;?></td>
			<td><?php echo $spass;?></td>
			<td><?php echo $cutoff;?></td>
			<td><?php echo $state;?></td>
			<td><?php echo $applbranchtotal;?></td>
			<td><?php echo $applbranch;?></td>
			<td><?php echo $incomelimit;?></td>
			<td><?php echo $benefit;?></td>
			<td><?php echo $link;?></td>
			</tr>
			<?php
		}
	}
	else
	{
		?>
		<tr>
		<td>Records Not found</td>
		</tr>
		<?php
	}
					}
						
?>
          </table>
        </div>
        </div>
      </form>
      
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
