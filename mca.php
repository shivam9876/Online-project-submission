<?php 
 session_start();


 if(!isset($_SESSION['admin']))
 {

 	$_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
 	//echo $_SERVER['REQUEST_URI'];
	header("location:admin.php");

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
    
    <ul class="nav navbar-nav">
      <li> <a href="welcomeadmin.php">BCA Assignment</a></li>
      <li ><a href="bsc.php">Bsc.it Assignment</a></li>
       <li ><a href="mca.php">MCA Assignment</a></li>
      <li ><a href="Msc.php">Msc.it Assignment</a></li>

      <li></li>
      <li><a href="logout.php">logout</a></li>
    </ul>
  </div>
</nav>
<h1> MCA Students Assignments</h1>
<div class="details">

<?php

$con=mysqli_connect('localhost','root','','register');
$query=mysqli_query($con," SELECT * FROM uplode where course like 'MCA%'");
$rowcount= mysqli_num_rows($query);

for ($i=1; $i <=$rowcount; $i++) { 
	$row= mysqli_fetch_array($query);


 ?>
 <hr>
		<ul>
			
		
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Student name:</u></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['text'] ?> </li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Course Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['course'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>semester:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['sem'] ?></li>
		<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email'] ?>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assignment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href='uplode/<?php echo $row['file'] ?>'><?php echo $row['file'] ?></a></li>
		
	</ul></div>


<?php } ?>
</table>
</body>
</html>