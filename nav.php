<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    *{
        margin: 0;
   padding: 0;
    }
.container-fluid{
    width: 100%;
    height: 100px;
  display: inline-block;
    justify-content: center;
    justify-items: center;
}
.t{
    font-style: italic;
    align-items:left;
    float: left;
    color: antiquewhite;
    text-align: left;
    margin-right: 100px;
    font-size: 100px;
   
    margin-left: 97px;
    font-family:Arial, Helvetica, sans-serif;

   
} 
.container-fluid img{
    align-items:left;
    border-radius:20px ;
   justify-content: center;
   margin-top: 20px;
   margin-bottom: 20px;
    margin-left: 20px;
   height: 70px;

   width: 100px;
}
.s{
    padding: 0%;
    margin-right:10px ;
}
.s input{
    justify-content: center;
   height: 50px;
   color: black;   
}
button{
    background-color: orange;
    color: black;
    margin-right: 20px;

    height: 50px;
    width: 90px;
    border-top-right-radius:5px ;
    border-bottom-right-radius:5px ;
}


 </style>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="i" style="display:inline-block "><img src="img/logo.jpg"></div>
   <div class="t"style="display:inline-blockalign:left"><h2>GOSHOPING</h2>
   </div>
   <div class="s"style="display:inline-block; align:right" > <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
   
      <button  type="submit" >Search</button>
    </form></div>
  </div>
</nav>
</body>

</html>