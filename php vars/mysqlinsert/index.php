<?php
include_once("config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contactno=$_POST['contactno'];
	$gender=$_POST['gender'];
	$education=$_POST['education'];
	$adress=$_POST['addrss'];
	$query=mysqli_query($con,"insert into data(name,email,contactno,gender,education,address) values('$name','$email','$contactno','$gender','$education','$adress')");
	if($query)
	{
	echo "<script>alert('Data inserted successfully');</script>";
	}
	else
	{
		echo "<script>alert('Data not inserted');</script>";
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>PHP GURUKUL | How to Insert Data into MySql Using PHP</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="http://www.phpgurukul.com/">Home</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="http://www.phpgurukul.com/all-demos/">All Demos</a></li>
			<li><a href="http://www.phpgurukul.com/category/php-projects/">Free Projects</a></li>
			<li><a href="http://www.phpgurukul.com/contact-us/">Contact</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutorials <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.phpgurukul.com/category/php/">PHP </a></li>
                <li><a href="http://www.phpgurukul.com/category/php-oops-concepts/">PHP OOPs</a></li>
                <li class="divider"></li>
                <li><a href="http://www.phpgurukul.com/category/php-data-object/">PDO</a></li>
                <li class="divider"></li>
                <li><a href="http://www.phpgurukul.com/category/inteview-ques-ans/">Interview QA</a></li>
              </ul>
            </li>
		</ul>
		
	</div>
</nav>

<div class="container-fluid">

  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>How to Insert Data into MySql Using PHP </h3>
		<hr >
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">
    <tr>
    <th height="62" scope="row">Name </th>
    <td width="71%"><input type="text" name="name" id="name" value=""  class="form-control" required /></td>
  </tr>  
  <tr>
    <th height="62" scope="row">Email id </th>
    <td width="71%"><input type="email" name="email" id="email" value=""  class="form-control" required /></td>
  </tr>
  <tr>
    <th height="62" scope="row">Contact no</th>
    <td width="71%"><input type="text" name="contactno" id="contactno" value=""  class="form-control" maxlength="10" required /></td>
  </tr>
   <tr>
    <th height="62" scope="row">Gender</th>
    <td width="71%"><input type="radio" name="gender" value="Male" checked >Male    <input type="radio" name="gender" value="Female" >female</td>
  </tr>

 <tr>
    <th height="62" scope="row">Education</th>
    <td width="71%"><select name="education" id="email" class="form-control" required >
    <option value="">Select your Education</option>
    <option value="Post Graduate">Post Graduate</option>
    <option value="Graduate">Graduate</option>
    <option value="Intermediate">Intermediate</option>
    <option value="High School">High School</option>
    <option value="Other">Other</option>
    
    </select></td>
  </tr>
   <tr>
    <th height="62" scope="row">Address</th>
    <td width="71%"><textarea name="addrss" class="form-control"  required></textarea> </td>
  </tr>
 <tr>
    <th height="62" scope="row"></th>
    <td width="71%"><input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>
  </tr>
</table>
 </form>

      </div>
    </div>
    <hr>
        
   
  </div><!--/center-->

 
<!--/right-->
  <hr>
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>