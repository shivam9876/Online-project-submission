<?php 
  session_start();
  if(!isset($_SESSION['username']))
     {
       $_SESSION['redirectURL']=$_SERVER['REQUEST_URI'];
           //echo $_SERVER['REQUEST_URI'];
          header("location:index.php");
        }
    ?>

<?php
    $con=mysqli_connect('localhost','root','','register');
     $user= $_SESSION['username'];
    $query=mysqli_query($con," SELECT * FROM signup WHERE username='$user' ");
     $row= mysqli_fetch_array($query);
    $id=$row['id'];
    if(isset($_REQUEST["submit"])){
    $file=$_FILES["file"]["name"];
    $text=$_POST["text"];
    $course=$_POST["course"];
    $sem=$_POST["sem"];
    $email=$_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
        $_emailerror=  "Invalid email format !!!!   please enter the valid email format"; 
          }
    else
      {
        $tmp_name=$_FILES["file"]["tmp_name"];
        $path="uplode/".$file;
        $file1=explode(".", $file);
        $ext=$file1[1];
        $allowed=array("jpg","png","gif","pdf","wmv","html","css","php","txt","zip","docx","pptx","xlsx");
     if (in_array($ext, $allowed)) 
            {
              move_uploaded_file($tmp_name, $path);
              $sql=mysqli_query($con,"INSERT INTO uplode(file,text,course,sem,email,userid) values('$file','$text','$course','$sem','$email',$id)");
            }
          $_insert= "great work  !!!     data insert";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  

<div class="col-lg-4">
  
</div>
<div class="col-lg-4">
 <div class="box">
   <form enctype="multipart/form-data" method="POST" action="home.php">
     <center>   <h4>Submit Assignment</h4>   </center>
        <label>Enter student name:</label>
            <input type="text" name="text" class="form-control" placeholder="enter your  name" required="" autocomplete="off"><br>
     <label>Enter course name: </label>
         <select name="course" class="form-control"  required="">
           <h1><option value="">Select your course</option>
             <option>MCA</option>
             <option>BCA</option>
             <option>BSC.IT</option>
             <option>MSc.it</option>
  
        </select><br>
     <label>Enter semester:</label>
         &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;
          <select name="sem"  class="form-control" required="">
            <h1><option value="">Select your semester</option>
                <option>1th Semester</option>
                <option>2th Semester</option>
                <option>3th Semester</option>
                <option>4th Semester</option>
                <option>5th Semester</option>
                <option>6th Semester</option></h1>
           </select><br>
                  
         <label>Enter your email</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="email"  class="form-control" placeholder="email" required="" autocomplete="off"><br>
           <label>Choose submit file: </label>
            <input class="form-control" type="file" name="file" required="">
               <pre> <input type="reset" name="reset" value="Reset"> <input type="submit" name="submit" value="submit"></pre>
          </form>
    </div>




     <script type="text/javascript">
        var validi="<?php  echo  $_insert ?>";
        alert(validi);
  
      </script>
      
        <script type="text/javascript">
           var valid="<?php  echo   $_emailerror ?>";
           alert(valid);
          </script>
      </div>

 </body>
 </html>
  
