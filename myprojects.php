<?php 
 session_start();


 if(!isset($_SESSION['username']))
 {

 	$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
 	//echo $_SERVER['REQUEST_URI'];
	header("location:login.php");

 }

 ?>



 <?php 



$con=mysqli_connect('localhost','root','','register');
if(isset($_SESSION['username'])){
	if($_SESSION['username']==true)
	{
//echo  $_SESSION['username'];
}

else{
	header('location:welcome2.php');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" type="text/css" href="stylecss.css">
         		<style type="text/css">




	</style>
</head>
<body>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Assignment submission</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="myprojects.php">My submit Assignment</a></li>
      <li><a href="projects.php">Other student Assignments</a></li>
      <li></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </div>
</nav>
<h1> <u>Your Submit Assignments list</u></h1>
<?php

$con=mysqli_connect('localhost','root','','register');
$user= $_SESSION['username'];

$query1=mysqli_query($con," SELECT * FROM signup WHERE username='$user'  ");
$row1= mysqli_fetch_array($query1);
$id=$row1['id'];

$query=mysqli_query($con," SELECT * FROM uplode WHERE userid='$id' ORDER BY id DESC");
$rowcount= mysqli_num_rows($query);
echo "Student name-:";
 echo  $_SESSION['username'];	
for ($i=1; $i <=$rowcount; $i++) { 
	$row= mysqli_fetch_array($query);

 ?>
 <hr>

		<ul>
			
		
		
		<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit Assignment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='uplode/<?php echo $row['file'] ?>'><?php echo $row['file'] ?></a></li>
		
	</ul>

<?php } ?>


</body>
</html>