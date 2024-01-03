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
			$benifit= "";
			$link= "";
			$qualification="";
					$eid= "";
			$esname= "";
			$espass= "";
					
					


    $cn = mysqli_connect("localhost", "root", "root", "db_admission");
    $sql = "select * from sch where id = ".$_GET['id'];
    $table = mysqli_query($cn, $sql);
    $row = mysqli_fetch_assoc($table);
					
	if(isset($_POST['submit']))
					{
					
					$sname = $_POST['sname'];
					$authority = $_POST['authority'];
					$aname = $_POST['aname'];
					$category = $_POST['category'];
					$spass = $_POST['spass'];
					$cutoff=$_POST['cutoff'];
					$state = $_POST['state'];
					$applbranchtotal = $_POST['applbranchtotal'];
					$applbranch = $_POST['applbranch'];
					$incomelimit = $_POST['incomelimit'];
					$benifit = $_POST['benifit'];
					$link = $_POST['link'];
						
    $er = 0;
						
    if($id == "")
    {
        $er++;
        $esname = "*Required";
    }
   
    

    if($sname == "")
    {
        $er++;
        $esname = "*Required";
    }
    else
    {
		$sname = test_input($sname);
		if(!preg_match("/^[a-zA-Z ]*$/",$sname)){
		$er++;
		$esname = "*Only letters and white space allowed";
        }
    }
	if($authority == "")
    {
        $er++;
        $esname = "*Required";
    }
    else
    {
		$authority = test_input($authority);
		if(!preg_match("/^[a-zA-Z ]*$/",$authority)){
		$er++;
		$esname = "*Only letters and white space allowed";
        }
    }
	if($aname == "")
    {
        $er++;
        $esname = "*Required";
    }
    else
    {
		$aname = test_input($aname);
		if(!preg_match("/^[a-zA-Z ]*$/",$aname)){
		$er++;
		$esname = "*Only letters and white space allowed";
        }
    }
	if($category == "")
    {
        $er++;
        $esname = "*Required";
    }
    else
    {
		$category = test_input($category);
		if(!preg_match("/^[a-zA-Z ]*$/",$category)){
		$er++;
		$esname = "*Only letters and white space allowed";
        }
    }

    if($spass == "")
    {
        $er++;
        $espass = "*Required";
    }
    else
    {
        $spass = test_input($spass);
        if(!preg_match("/^[+0-9]*$/",$spass)){
            $er++;
            $espass = "*Only numbers are allowed";
        }
							
    }
	if($cutoff == "")
    {
        $er++;
        $espass = "*Required";
    }
    else
    {
        $cutoff = test_input($cutoff);
        if(!preg_match("/^[a-zA-Z ]*$/",$cutoff)){
		$er++;
		$esname = "*Only letters and white space allowed";
        }
							
    }
	if($state == "")
    {
        $er++;
        $espass = "*Required";
    }
    else
    {
        $state = test_input($state);
        if(!preg_match("/^[a-zA-Z ]*$/",$state)){
		$er++;
		$esname = "*Only letters and white space allowed";
        }
							
    }
	if($applbranchtotal == "")
    {
        $er++;
        $espass = "*Required";
    }
    else
    {
        $applbranchtotal = test_input($applbranchtotal);
        if(!preg_match("/^[a-zA-Z ]*$/",$applbranchtotal)){
		$er++;
		$esname = "*Only letters and white space allowed";
        }
							
    }
	if($applbranch == "")
    {
        $er++;
        $espass = "*Required";
    }
    else
    {
        $applbranch = test_input($applbranch);
        if(!preg_match("/^[a-zA-Z ]*$/",$applbranch)){
		$er++;
		$esname = "*Only letters and white space allowed";
        }
							
    }
	if($incomelimit == "")
    {
        $er++;
        $espass = "*Required";
    }
    else
    {
        $incomelimit = test_input($incomelimit);
        if(!preg_match("/^[+0-9]*$/",$incomelimit)){
            $er++;
            $espass = "*Only numbers are allowed";
        }
							
    }
	if($benifit == "")
    {
        $er++;
        $espass = "*Required";
    }
    else
    {
        $benifit = test_input($benifit);
        if(!preg_match("/^[a-zA-Z ]*$/",$benifit)){
		$er++;
		$esname = "*Only letters and white space allowed";        }
							
    }
	if($link == "")
    {
        $er++;
        $espass = "*Required";
    }
    

       
        if($er == 0)
        {
            $sql = "update sch set id = '".strip_tags($id)."', 
            sname = '".strip_tags($sname)."',
            authority = '".strip_tags($authority)."',
            aname = '".strip_tags($aname)."',
            category = '".strip_tags($category)."',
			spass = '".strip_tags($spass)."',
			cutoff = '".strip_tags($cutoff)."',
			state = '".strip_tags($state)."',
            applbranchtotal = '".strip_tags($applbranchtotal)."',
            applbranch = ".strip_tags($applbranch)." ,
            incomelimit = '".strip_tags($incomelimit)."',
			benifit = '".strip_tags($benifit)."',
			link = '".strip_tags($link)."' where id = ".$_GET['id'];
            
            if(mysqli_query($cn, $sql))
            {
                print '<span class = "successMessage">Data update successfully</span>';
                $row['id'] = "";
                $row['sname'] = "";
                $row['authority'] = "";
                $row['aname'] = "";
                $row['category'] = "";
                $row['spass'] = "";
                $row['cutoff'] = "";
                $row['state'] = "";
                $row['applbranchtotal'] = "";
                $row['applbranch'] = "";
				$row['incomelimit'] = "";
				$row['benifit'] = "";
				$row['link'] = "";
            }
            else
            {
                print '<span>'.mysqli_error($cn).'</span>';
            }
        }
    }
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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

<div class="form-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 id="et">Edit the scholarship details:
                        <?php print $_GET['id'].', Name: '.$row["sname"]; ?>'s information</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left-side-form">
                                        <h5><label for="id">ID</label>
                                            <span class="error">
                                                <?php print $eid; ?></span></h5>
                                        <p><input type="text" name="sname" value="<?php print $row['id']; ?>"></p>

                                        <h5><label for="sname">Sname</label><span class="error">
                                                <?php print $esname; ?></span></h5>
                                        <p><input type="text" name="sname" value="<?php print $row['sname']; ?>"></p>

										
										<h5><label for="authority">authority</label><span class="error">
                                                 <?php print $esname; ?></span></h5>
                                        <p><input type="text" name="authority" value="<?php print $row['authority']; ?>"></p>
										
										<h5><label for="aname">aname</label><span class="error">
                                                 <?php print $esname; ?></span></h5>
                                        <p><input type="text" name="aname" value="<?php print $row['aname']; ?>"></p>
										
										<h5><label for="category">category</label><span class="error">
                                                 <?php print $esname; ?></span></h5>
                                        <p><input type="text" name="category" value="<?php print $row['category']; ?>"></p>
										
										<h5><label for="spass">spass</label><span class="error">
                                                 <?php print $spass; ?></span></h5>
                                        <p><input type="text" name="spass" value="<?php print $row['spass']; ?>"></p>
                                        
										<h5><label for="cutoff">cutoff</label><span class="error">
                                                 <?php print $esname; ?></span></h5>
                                        <p><input type="text" name="cutoff" value="<?php print $row['cutoff']; ?>"></p>
										
										<h5><label for="state">state</label><span class="error">
                                                 <?php print $esname; ?></span></h5>
                                        <p><input type="text" name="state" value="<?php print $row['state']; ?>"></p>
										
										<h5><label for="applbranchtotal">applbranchtotal</label><span class="error">
                                                 <?php print $esname; ?></span></h5>
                                        <p><input type="text" name="applbranchtotal" value="<?php print $row['applbranchtotal']; ?>"></p>
										
										<h5><label for="applbranch">applbranch</label><span class="error">
                                                 <?php print $espass; ?></span></h5>
                                        <p><input type="text" name="applbranch" value="<?php print $row['applbranch']; ?>"></p>
										
										<h5><label for="incomelimit">incomelimit</label><span class="error">
                                                 <?php print $espass; ?></span></h5>
                                        <p><input type="text" name="incomelimit" value="<?php print $row['incomelimit']; ?>"></p>
										
										<h5><label for="benifit">benifit</label><span class="error">
                                                 <?php print $esname; ?></span></h5>
                                        <p><input type="text" name="benifit" value="<?php print $row['benifit']; ?>"></p>
										
										<h5><label for="link">link</label>>
                                                
                                        <p><input type="text" name="link" value="<?php print $row['link']; ?>"></p>
										

                                        <p><input type="submit" name="submit" value="Save Change"></p>
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
</body>
</html>