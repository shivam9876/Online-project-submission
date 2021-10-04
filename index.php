<?php
session_start();
if(isset($_post['submit'])){
  if($_post['password'] == $_password){
    $_SESSION['username']== TRUE;
    header('loaction:'.$_SESSION['redirectURL']);
  }
 }
?>
<?php
$con=mysqli_connect('localhost','root','','register');
if(isset($_REQUEST['submit']))
{
  $user=$_REQUEST['username'];
  $pass=md5($_REQUEST['password']);
  

  $query=mysqli_query($con,"SELECT * from signup where username='$user' && password='$pass' ");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true)
{
  $_SESSION['username']=$user;
  header('location:home.php');
}
else
  $_loginerror= "  Oops...username or password was wrong! error" ;
}

   

?>


 </script>
    <script type="text/javascript">
    var validi="<?php  echo  $_loginerror ?>";
    alert(validi);
  
  </script>

<!DOCTYPE html>
 <html>
  <head>
	    <title>register</title>
		     <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" type="text/css" href="stylecss.css">
     </head>
<body>

 <nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Assignment submission</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="signup.php">Student signup</a></li>
      <li><a href="admin.php">Admin login</a></li>
   
    </ul>
  </div>
</nav>
 
 <div id="gallery" class="container-fluid bg-3 text-center">
   <br><br><br><br>
    <div class="row">
	<div class="col-md-8 ">
     <h1 style="font-size: 80px;">Online Assignment submission</h1>
     <h3><b>Build for everyone</b></h3>
       <h2 style="font-size: 25px;" ><br> In this website everyone submit their assigenment.<br>
                  you can also see many type of project  according to your interest.<br></h2>
    </div>
		<div class="col-md-3">
        <form method="POST" action="index.php">
            <h2 > login</h2><br>
	         <div class="form-group">
	             <input type="text" class="form-control" id="search" placeholder="username" name="username" autocomplete="off">
             </div><br>
		       <div class="form-group">
		          <input type="password" class="form-control" id="search" placeholder="password" name="password" autocomplete="off" required="">
            </div>
	        <button type="submit" class="btn btn-default" name="submit" style="margin: 0px 40%">Submit</button>
          <br><br>
		    <b><p > &nbsp; &nbsp;  Not a member? <a href="signup.php"> signup</a></p></b><br>
	    </form>
   </div>
  <div class="col-md-1"></div>
 </div>
</div>
 


</body>
</html>

