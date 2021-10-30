<?php
include "connection.php";
$id=$_GET["id"]; //getting the id from the button
 //declaring the variable for updation
$destination="";
$image1="";
$description="";
$price="";

$res=mysqli_query($link, "select * from table1 where id=$id");
//it will go on executing until the required id is found and later store those values in the above declared variables
//this will be used to display using "value" attribute in the form 
while($row=mysqli_fetch_array($res))
{
    $destination=$row["destination"];
    $image1=$row["image1"];
    $description=$row["description"];
    $price=$row["price"];
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inserting Destination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
  <h2>Editting information</h2>
  <form action="" name="form1" method="post" enctype="multipart/form-data">

  <img src="<?php echo $image1; ?>" height="100" width="100">
    
  <div class="form-group">
      <label for="email">Enter Destination name:</label>
      <input type="text" class="form-control" id="destination" placeholder="Enter destination" name="destination"  value="<?php echo $destination; ?>">
    </div>

    <div class="form-group">
      <label for="email">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="select an image" name="f1" >
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="description" placeholder="Enter description" name="description" value="<?php echo $description; ?>" rows="4"  ></textarea>
    </div>


    <div class="form-group">
      <label for="email">Enter the price:</label>
      <input type="text" class="form-control" id="destination" placeholder="Enter price" name="price"  value="<?php echo $price; ?>">
    </div>

    
    
    
    <button type="submit" name="update" class="btn btn-default">Update</button>
   
  </form>
</div>
<div>



</div>

</body>

<?php
//for doing the update operation, this will happen when the update button is pressed in this page
if(isset($_POST["update"]))
{

    $tm=md5(time()); //to make the image unique
    $fnm=$_FILES["f1"]["name"];

    if($fnm==""){
        mysqli_query($link,"update table1  set destination='$_POST[destination]',description='$_POST[description]',price='$_POST[price]' where id=$id") or  die(mysli_error($link));
    }
    else {
        //path to store the image
    $dst="./images/".$tm.$fnm;
    //dst1 is declared to store it in the table
    $dst1="./images/".$tm.$fnm;

    //move_uploaded_file(source, destination)
    move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);



    mysqli_query($link,"update table1  set destination='$_POST[destination]',image1='$dst1',description='$_POST[description]' where id=$id") or  die(mysli_error($link));
    }


    

//going back to the index page
?>
<script type="text/javascript">
window.location="insert.php";
alert('Information updated');
</script>

<?php

}


?>




</html>