<?php  include 'nav.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'conn.php';

   $fname=$_POST['fname'];
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="INSERT INTO regi (name,username,password) value ('$fname','$username','$password')";
  $r=mysqli_query($conn,$sql);
  if($r)
  { 

    session_start();
    $_SESSION["name"]="$fname";
    echo"<div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Well done!</h4>
  <p>Aww yeah, you successfully regi.<a href='signin.php'>here  sign in now</a> </p>
  <hr>
  <p class='mb-0'>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
";
   
  }
  else
  {
       echo"plz the insert the data ";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    aside{
    
  width: 20%;
  height: 1747.6px;
  padding-left: 15px;
  margin-left: 15px;
  float: right;
  font-size: 30px;
  color: azure;
  font-style:oblique;
  background-color: darkslategray;
}
form{
  margin-top: 30px;
margin: 20px;
}
input{
  height: 40px;
  width: 350px;
  font-size: 30px;
}
    
       .c a{
          color:white;
          font-style: normal;
          background-color: darkslategray;
        }

        </style>
</head>
<body>

   <div class="as">
   <aside>
 <div class="c"><a href="index.php">X</a></div>
        <center><h2>sign up </h2></center>
    <form action="signup.php" method="POST" action="ss.php" method="POST">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter full  name </label>
    <br><input name="fname"required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <br><input type="text" name="username"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">creat Password</label>
    <br><input type="password"  name="password" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" required>Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form
      </aside>
   </div>
   
</body>
</html>
<?php include 'home.php';?>
<?php include 'aboutas.php';?>
<?php include 'f.php';  ?>