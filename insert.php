<!DOCTYPE html>
<?php
include "connection.php";
?>



<html lang="en">
<head>
  <title>Travel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
     body{
	margin: 0 auto;
	background-image: url("travel4.jpg");
	background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
}
table { background-color: white; }
</style>
</head>
<body>

<div class="container">
  <h2>VENTUREintoADV</h2>
  
  <div class="col-lg-4">
  <form action="" name="form" method="post" enctype="multipart/form-data">


  <div class="form-group">
      <label for="email">Enter Destination name:</label>
      <input type="text" class="form-control" id="destination" placeholder="Enter destination" name="destination">
    </div>

    <div class="form-group">
      <label for="email">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="select an image" name="f1" >
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="description" placeholder="Enter description" name="description" rows="4"></textarea>
    </div>
    
    <div class="form-group">
      <label for="email">Enter the price:</label>
      <input type="text" class="form-control" id="destination" placeholder="Enter price" name="price">
    </div>

    <br>

    <button type="submit" class="btn btn-default" name="insert">Insert Destination</button>
  </form>
</div>
</div>

<h3>List of all the pacakages:</h3>

<div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
         <th>Id</th> 
         <th>Destination</th>
        <th>Image</th>
        <th>price</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
      <?php

      $res=mysqli_query($link, "select * from table1");
      while($row=mysqli_fetch_array($res)){
          echo "<tr>";
         
          echo "<td>"; echo $row["id"]; echo "</td>";
          echo "<td>"; echo $row["destination"]; echo "</td>";
          echo "<td>"; ?> <img src="<?php echo $row["image1"] ?>" height="100" width="100"><?php echo "</td>";
          echo "<td>"; echo $row["price"]; echo "</td>";
          echo "<td>"; echo $row["description"]; echo "</td>";

          //getting the php codes for theh button which is why we complete and the start php
          echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button> </a>  <?php echo "</td>";
          echo "<td>"; ?>  <a href="delete.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">Delete</button> </a>  <?php echo "</td>";
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>

</div>


<button type="button" class="btn btn-success btn-lg float-right" style="margin-left: 50px;" onclick="window.location.href='aaa.php'">back</button>
</body>


<?php
if(isset($_POST["insert"]))
{
    $tm=md5(time()); 
    $fnm=$_FILES["f1"]["name"];
    
    $dst="./images/".$tm.$fnm;
   
    $dst1="./images/".$tm.$fnm;

    
    move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
    mysqli_query($link, "insert into table1 values(NULL, '$_POST[destination]', '$dst1','$_POST[price]','$_POST[description]')");
    header('Location: insert.php');

    ?>

    <script type="text/javascript">
    window.location.href= window.location.href;
    </script>
    
    <?php

}


?>
</html>