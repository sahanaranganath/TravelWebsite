<?php
include "connection.php";

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="stylespackages.css?v=<?php echo time(); ?>">
    <title>Packages</title>

    
  </head>
  <body>
    <h1>Packages</h1>


    <?php

$res=mysqli_query($link, "select * from table1");
while($row=mysqli_fetch_array($res)){
    ?> 
    <div class="card mb-3">
    <img src="<?php echo $row["image1"] ?>" height="300" width="100" class="card-img-top"><?php
    ?>
    <div class="card-body"> <?php
   ?> <h5 class="card-title"> <?php echo $row["destination"]; ?> </h5><?php
    ?><p class="card-text"><?php echo $row["description"]; ?> </p> 
   
    <?php
     ?><a href="index1.php" class="btn btn-primary">Click here to register</a> <?php
    ?> </div> <?php 
    ?> </div> <?php

    
   
    
}
?>

    
  
  
    
    
  

    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>