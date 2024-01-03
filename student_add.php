<!-- ===============================================
	**** A COMPLETE VALIDATE FORM WITH PHP ****
================================================ -->

<!-- ==============  PHP begin  =================-->
<?php
					$sname = "";
					$education = "";
					$phone = "";
					$email = "";
					$password = "";
					$cpassword = "";
					$age = "";
					
					$caste = "";
					
					
					$esname = "";
					$eeducation = "";
					$ephone = "";
					$eemail = "";
					$eage = "";
					
					$ecaste = "";
					$epassword = "";
					$ecpassword = "";
					
					
					if(isset($_POST['submit']))
					{
					$sname = $_POST['sname'];
					$education = $_POST['education'] ;
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$cpassword = $_POST['cpassword'];
					$age = $_POST['age'];
					
					
					$caste = $_POST['caste'];
						
					
						
					
						
						$er = 0;
						
						if($sname == "")
						{
							$er++;
							$esname = "*Required";
						}
						else{
							$sname = test_input($sname);
							if(!preg_match("/^[a-zA-Z ]*$/",$sname)){
							$er++;
							$esname = "*Only letters and white space allowed";
						}
						}

						if($education == "select")
						{
							$er++;
							$eeducation = "*Required";
						}
						

						if($phone == "")
						{
							$er++;
							$ephone = "*Required";
						}
						else{
							$phone = test_input($phone);
							if(!preg_match("/^[+0-9]*$/",$phone)){
							$er++;
							$ephone = "*Only numbers are allowed";
							}
							
						}

						if($email == "")
						{
							$er++;
							$eemail = "*Required";
						}
						else
						{
							$email = test_input($email);
							if(!filter_var($email, FILTER_VALIDATE_EMAIL))
							{
								$er++;
								$eemail = "*Email format is invalid";
							}
							
						}
						
						if($password == "")
						{
							$er++;
							$epassword = "*Required";
						}
						else{
							$password = test_input($password);
							if(!preg_match("/^[a-zA-Z0-9]*$/",$password)){
							$er++;
							$epassword = "*Only letters and numbers allowed";
						}
						}

						if($age == "")
						{
							$er++;
							$eage = "*Required";
						}
						else{
							$age = test_input($age);
							if(!preg_match("/^[+0-9]*$/",$age)){
							$er++;
							$eage = "*Enter valid age";
							}
							
						}

						 
						if($password!=$cpassword){
							$er++;
							$ecpassword = "*password doesnt matched";
							
						}
						if($caste == "select")
						{
							$er++;
							$ecaste = "*Required";
						}
						
						if($er == 0)
						{
                            /* $cn = mysqli_connect("localhost", "root", "", "db_admission");*/
							
							$sql = "INSERT INTO student (sname,education,phone,email,password,age,caste) VALUES (
							'".mysqli_real_escape_string($cn, strip_tags($sname))."',
							'".mysqli_real_escape_string($cn, strip_tags($education))."', 
							'".mysqli_real_escape_string($cn, strip_tags($phone))."', 
							'".mysqli_real_escape_string($cn, strip_tags($email))."', 
							'".mysqli_real_escape_string($cn, strip_tags($password))."', 
							'".mysqli_real_escape_string($cn, strip_tags($age))."', 
							
							'".mysqli_real_escape_string($cn, strip_tags($caste))."'
							)";
							
							if(mysqli_query($cn , $sql))
							{
								print '<span class = "successMessage">your account has been successfully created</span>';
								$sname = "";
								$education = "";
								$phone = "";
								$email = "";
								$password = "";
								$age = "";
								
								$caste = "";
								
									
							}
							else
							{
								print '<span class= "errorMessage">'.mysqli_error($cn).'</span>';
							}
						}
						else
						{
							print '<span class = "errorMessage">Please fill all the required fields correctly.</span>';
						}
					}
					
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}
					
//================================ PHP End =============================	
?>

<div class="form-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h3>Sign Up</h3>
				</div>

				<div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">
										<h5><label for="sname">Student name</label>
										<span class="error"><?php print $esname; ?></span></h5>
										<p><input type="text" name="sname" value="<?php print $sname; ?>"></p>

										<h5><label for="education">Education details</label><span class="error">
												<?php print $eeducation; ?></span></h5>
										<p><select name="education" id="">
												<option value="0">select</option>
												<option >10</option>
												<option >12</option>
												<option >Graduate</option>
												
											</select><span class="error">
												<?php print $eeducation; ?></span></p>


										<h5><label for="phone">phone</label><span class="error">
												<?php print $ephone; ?></span></h5>
										<p><input type="text" name="phone" value="<?php print $phone; ?>"></p>

										<h5><label for="email">email</label><span class="error">
												<?php print $eemail; ?></span></h5>
										<p><input type="text" name="email" value="<?php print $email; ?>"></p>

										
									</div>
								</div>
								<div class="col-md-6">
									<div class="right-side-form">
									
										<h5><label for="password">password</label>
										<span class="error"><?php print $epassword; ?></span></h5>
										<p><input type="password" name="password" value="<?php print $password; ?>"></p>
										
										<h5><label for="cpassword">Confirm password</label>
										<span class="error"><?php print $ecpassword; ?></span></h5>
										<p><input type="password" name="cpassword" value="<?php print $cpassword; ?>"></p>
										
										<h5><label for="age">Age</label>
										<span class="error"><?php print $eage; ?></span></h5>
										<p><input type="text" name="age" value="<?php print $age; ?>"></p>
										
										
											
											
										<h5><label for="caste">Caste</label><span class="error">
												<?php print $ecaste; ?></span></h5>
										<p><select name="caste" id="">
												<option value="0">select</option>
												<option >ST</option>
												<option >SC</option>
												<option >EBC</option>
												<option >OBC</option>
												<option >General</option>
												
												
											</select><span class="error">
												<?php print $ecaste; ?></span></p>

										

										<p><input type="submit" name="submit" value="Submit"></p>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
