<?php  include 'nav.php'; 
  $login=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{

  include 'conn.php';
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="select *from regi where username ='$username' AND password='$password'";
$r=mysqli_query($conn,$sql);
$num=mysqli_num_rows($r);
if(!$num==0)
{    
   
    session_start();
    $login=true;
    $_SESSION["login"]=true;
    $_SESSION["username"]="$username";
   header("location:ss.php");
 
}
else{
  echo"<div class='alert alert-danger' role='alert'>
  A simple danger alert with <a href='signup.php' class='alert-link'>fast sign up</a>. Give it a click if you like.<a href='signin.php' class='alert-link'>try agin</a>.
</div>";

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
  <div class="a">  <aside>
 <div class="c"><a href="index.php">X</a></div>
        <center><h2>sign in </h2></center>
    <form action="signin.php" method="POST" >

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <br><input type="text" name="username"required>
  </div>
  <div class="mb-3">
    <label  class="form-label">creat Password</label>
    <br><input type="password"  name="password" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </aside>
  </div>
    
</body>
</html>
<?php  include 'home.php'; ?>
<?php include 'aboutas.php';?>
<?php include 'f.php';  ?>