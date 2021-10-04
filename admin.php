<?php
session_start();
$con=mysqli_connect('localhost','root','','register');
if(isset($_POST['submit']))
{
	$user=$_POST['admin'];
  $pass=$_POST['password'];
  

  $query=mysqli_query($con,"SELECT * from admin where admin='$user' && password='$pass' ");
  $rowcount=mysqli_num_rows($query);
  if($rowcount==true)
{
	$_SESSION['admin']=$user;
	header('location:welcomeadmin.php');
}
else
	$_loginerror= "  Oops...username or password was wrong! error" ;
}

?>


<!DOCTYPE html>
 <html>
 <head>
  <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" type="text/css" href="stylecss.css">
    <style type="text/css">
      
     <style>
            body{
               background:linear-gradient(rgba( 0, 0, 0, 0),rgba( 0, 0, 0)),url(img5.jpg);
               background-size: cover;
               background-attachment: fixed;
               background-position: center;
             }
     
          input[type="text"]
                 {
                         width:70%;
                           padding: 10px 0px;
                               margin:10px 0px;
                                   border-margin:20px;
                                     border-color:white;
                                       margin-left:10px;
                                           outline:none;
                                              background:white;
                                                display:inline-block;
                                                  text-decoration:none;
                                                       border:;
                                                        color:black;
                                                        font-size: 16px solid black;
                                                            font-size:15px;
                                              border-radius:4px;
                        }
            input[type="submit"]
                  { 
                    background:transparent:
                     border:none;
                      outline:none;
                        color:#fff;
                          background:#03a9f4;
                             padding:12px 80px;
                              border-radius:5px;
                                margin-left:90px;
                           margin-top:25px;
                     }
   
           input[type="button"]
                { 
                  background:transparent:
                  border:none;
                  outline:none;
                   color:#fff;
                    background:green;
                     padding:5px 16px;
                    border-radius:5px;
                     margin-left:50px;
                   margin-top:35px;
                 }
   
            input[type="password"]
                    {
                                          width:70%;padding: 10px 0px;
                                           margin:10px 0px;
                                            border-color:white;
                                             color:black;
                                               font-size:15px;
                                                 margin-left:10px;
                                                 font-size: 16px solid white;
                                                          
                                                 outline:none;
                                                  background:white;
                                                   display:inline-block;
                                                    text-decoration:none;
                                                               border-radius:4px;
                         }
            label
                {
                   position:absolute;
                   margin:0px 25px;
                   font-size:26px;
                   color:white;
                  }

           font
                 {
                  text-align: center;
                  font-family:sans-serif;
                  font-size:25px;
                  color:white;
                  font-weight:700;
                }
            .box{
                       position:absolute;
                        margin-top:10%;
                         margin-left:25%;
                          background:transparent;
                           width:500px;
                             height:430px;
                               background: rgba(0,0,0,.0);
                                 box-sizing:border-box;
                                   box-shadow:0 15px 25px white;
                                     border-radius:8px;
                               }
        </style>
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
  
 <form method="POST" action="admin.php">
  <div class="box">
  <h2><font style="font-size: 50px; color: black;"> &nbsp;&nbsp; Admin login</font></h2><br>
        &nbsp;&nbsp; <label>Admin name</label><br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="admin" placeholder=" username" required="" autocomplete="off"><br><br>
        &nbsp;&nbsp; <label>Password</label><br><br>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="password" name="password" placeholder=" *******" required="">
              <input type="submit" name="submit" value="login">
       
    </div>
  </form>
</body>
</html>
<script type="text/javascript">
		var valid="<?php  echo $_loginerror ?>";
		alert(valid);
	</script>

