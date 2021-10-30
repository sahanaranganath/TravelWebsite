<!DOCTYPE html>
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

    <title>Packages</title>
    <link rel="stylesheet"href="package.css">
  <style>
    
    </style>
  </head>
  <body>
    <h1>Packages</h1>

    <?php

    
    $res=mysqli_query($link, "select * from table1");
    while($row=mysqli_fetch_array($res)){
    

    ?><div class="card" style="width: 40rem;">
      <img src="<?php echo $row["image1"] ?>" class="card-img-top" alt="..."><?php
     ?> <div class="card-body"><?php
      ?>  <h5 class="card-title"><?php echo $row["destination"]; ?></h5>  <?php
        ?> <h6>Visit</h6> <?php
       ?> <p class="card-text"><?php echo $row["description"] ?> </p> <?php
        
       ?> <p>starting at <?php echo $row["price"] ?>  </p> <?php
       ?> <a href="contactus.php" class="btn btn-primary">BOOK NOW</a> <?php
        
          
      ?> </div>
    </div>
    <br> <?php
   
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