<?php 
$con=mysqli_connect('localhost','root','','register');
  if(isset($_POST['username']))
  {  $user=$_POST['username'];
 
$email =$_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $_emailerror=  "Invalid email format"; 

}
      else{
  $pass=$_POST['password'];
  $pass=md5($pass);
  $query=mysqli_query($con,"SELECT * FROM signup WHERE email='$email'");
  if (mysqli_num_rows($query)> 0) {
    $_signuperror= "  Oops..! error!!  this email is already exists please enter new email to signup!" ;
}
  
  else{

  $sql="INSERT into signup( username, email, password) values('$user','$email','$pass')";
     if(!mysqli_query($con,$sql))
  
  {
    $_notinsert= 'data not  insert';
   }
else{
  $_insert= "great work  !!!     data insert";
 

}

}

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
        body{
               background:linear-gradient(rgba( 0, 0, 0, 0),rgba( 0, 0, 0)),url(back.jpg);
               background-size: cover;
               background-attachment: fixed;
               background-position: center;
             }
     
          input[type="text"]
                 {
                         width:90%;
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
                                          width:90%;padding: 10px 0px;
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
             .box
               {
                  position:absolute;
                   margin-top:5%;
                    margin-left:25%;
                    background:transparent;
                     width:480px;
                      height:500px;
                        background: rgba(0,0,0,.0);
                          box-sizing:border-box;
                            box-shadow:0 15px 25px white;
                              border-radius:8px;
                    }
       </style>
</head>
 <body>

	 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      <a class="navbar-brand" href="#myPage">Online Project Submission</a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
           <li><a href="index.php">Login</a></li>
           <li><a href="Signup.php">Signup</a></li>
           <li><a href="admin.php">Admin login</a></li>
        
       </ul>
      </div>
    </div>
   </nav> 
   <br><br>


	

	<div class="box">
	<form method="POST" action="Signup.php">
		<br>
		<font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign up</font><br><br>
		<br>
		<label>Username</label><br><br>
		<input type="text" name="username" placeholder="  Username" required="" autocomplete="off"><br>

		<label>Email</label><br><br>
		<input type="text" name="email" placeholder="  Email" required="" autocomplete="off"><br>

		
		<label>Password</label><br><br>
		<input type="password" name="password" placeholder="  Password" required="" autocomplete="off"><br>
		
		<input type="submit" name="Signup" value="Signup">
		
	</form>
</div>
<div class=" js">
<script type="text/javascript">
		var valid="<?php  echo $_signuperror ?>";
		alert(valid);
		
	</script>
	<script type="text/javascript">
		var valide="<?php  echo  $_emailerror ?>";
		alert(valide);
	
	</script>
		<script type="text/javascript">
		var validi="<?php  echo  $_insert ?>";
		alert(validi);
	
	</script>
</div>

</body>
</html>