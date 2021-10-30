<?php
include "connectiontocontact.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>VENTUREintoADV</title>
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

    h1{
    text-align: center;
}
h2{
    text-align: center;
}

  </style>
</head>
<body>
<h1>VENTUREintoADV</h1>
<h2>List of Enquiries</h2>
<div class="col-lg-12">
         
  <table class="table table-bordered">
    <thead>
      <tr>
         <th>Id</th> 
         <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Description</th>

      </tr>
    </thead>
    <tbody>
      <?php

      $res=mysqli_query($link, "select * from table1");
      while($row=mysqli_fetch_array($res)){
          echo "<tr>";
         
          echo "<td>"; echo $row["id"]; echo "</td>";
         
          echo "<td>"; echo $row["firstname"]; echo "</td>";
         
          echo "<td>"; echo $row["email"]; echo "</td>";
          echo "<td>"; echo $row["contact"]; echo "</td>";
          echo "<td>"; echo $row["description"]; echo "</td>";

          //getting the php codes for theh button which is why we complete and the start php
          
          echo "</tr>";
      }
      ?>
    </tbody>
  </table>

</div>

</body>


<?php 
if(isset($_POST["insert"]))
{
    $tm=md5(time()); //to make the image unique
    $fnm=$_FILES["f1"]["name"];
    //path to store the image
    $dst="./images/".$tm.$fnm;
    //dst1 is declared to store it in the table
    $dst1="./images/".$tm.$fnm;

    //move_uploaded_file(source, destination)
    move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);

   mysqli_query($link, "insert into table1 values(NULL, '$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[contact]','$dst1')");
   header('Location: index.php'); //this prevents from adding the same details again and again  after refreshing the page
 
   //the next few lines of the script code is mainly written so that we dont have to refresh the page everytime and the the changes will be shown automatically
   ?>

<script type="text/javascript">
window.location.href= window.location.href;
</script>

<?php

}

if(isset($_POST["delete"]))
{
    mysqli_query($link,"delete from table1 where firstname='$_POST[firstname]'") or  die(mysli_error($link));
    ?>

<script type="text/javascript">
window.location.href= window.location.href;
</script>

<?php

}


if(isset($_POST["update"]))
{
    mysqli_query($link,"update table1 set firstname='$_POST[lastname]' where firstname='$_POST[firstname]'") or  die(mysli_error($link));

    ?>

<script type="text/javascript">
window.location.href= window.location.href;
</script>

<?php

}


?>

</html>