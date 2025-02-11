<?php
include 'nav.php';
session_start();

  echo"<strong>welcom to-".$_SESSION["username"];"</strong>";
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'conn.php';
   $pname=$_POST['pname'];
   $fname=$_POST['fname'];
   $fadd=$_POST['fadd'];
   $pcode=$_POST['pcode'];
   $lm=$_POST['lm'];
   $payo=$_POST['payo'];

   $sql="insert into buy (pname,fname,fadd,pcode,lm,payo)value('$pname','$fname','$fadd','$pcode','$lm','$payo')";
   $r=mysqli_query($conn,$sql);
   if($r)
   {
    echo" <div class='alert alert-success' role='alert'>
    you oder is process the
  </div> ";
       echo"<div class='alert alert-primary' role='alert'>
  A simple primary alert with <a href='index.php' class='alert-link'>more shoping </a>.
</div";
   }
   else{
    echo"<div class='alert alert-danger' role='alert'>
    A simple danger alert with <a href='signin.php' class='alert-link'>ples frist sign in </a>.
  </div>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bdb</title>
</head> 
<style> 
table{
    font-size: 20px;
    text-align: center;
    height: 500px;
    width: 800px;
    margin: 50px;
}
input{
    font-size: 20px;
}
   .bd img{
    border-radius: 20px;
        background-color:rosybrown;
        margin: 10px;
        padding: 20px;

        width: 300px;
        height: 400px;
    }
    
    </style>
<body>
   <div class="bd">
   <form action="msb2.php" method="post">
        <center>
       <table border="3"> 
        <h1>buy here</h1>
   <tr><th >product img</th><th >fill deteils</th></tr><tr><td rowspan="7"><img src="img/shose2.jpg"></td>
   <td><label>product name:-</label><input type="text" name="pname" required></td>
   </tr>
   <tr>
    <td><label> you full name   :-</label>   <input type="text" name="fname" required></td>
   </tr>
   <tr>
    <td><label> full Adress:-</label ><input type="text" name="fadd" required ></td>
   </tr>
   <tr>
    <td><label> pincode:-</label>   <input type="number" name="pcode" required></td>
   </tr>
   <tr>
    <td><label> land mark:-</label>   <input type="text" name="lm" required></td>
   </tr>
   <tr>
    <td>payment options<select name="payo" class="form-select form-select-sm" aria-label="Small select example" >
    <option value="cash on delivery" >cash on delivery</option required >
  <option value="gpay/phonepay/paytm">gpay/phonepay/paytm</option required >
  <option value="net banking">net banking</option required>
</select>
</td>
   </tr>
   <tr><td><button class="btn btn-primary" type="submit">submit</button></td></tr>
      </table>
    </form>
    </center>
   </div>
    
</body>
</html>
<?php include 'aboutas.php';?>
<?php include 'f.php';  ?>
