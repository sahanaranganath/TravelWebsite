<?php
include "connectiontocontact.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{
            padding-top: 200px;
            text-align: center;
            color:white;
            background-image: url("form.jpg");
            height: 400px;
        }
        .container{
            margin-top:50px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-left: 10px;
        }
    </style>


<script>
  function showAlert() {
    alert ("Your Deatails have been submitted successfully. Our team will get back to you soon");
  }
  </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Contact us</title>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <h1> <u>CONTACT US </u></h1>
    <div class="container">
        
      
            <form action="" name="form1" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter name" name="firstname" >
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
                        <div id="emailHelp" class="form-text">We'll never share your number with anyone else.</div><br>
                        <div class="input-group">

                            <span class="input-group-text">Information</span>
                            <textarea class="form-control" id="description" placeholder="Enter description" name="description" rows="4"></textarea>
                          </div>


                        </div>
          <button  type="submit" name="insert" class="btn btn-success" onclick="showAlert()">Submit</button>
      
        </form>
      </div>




<?php
      if(isset($_POST["insert"]))
{
    

   mysqli_query($link, "insert into table1 values(NULL, '$_POST[firstname]',  '$_POST[email]', '$_POST[contact]','$_POST[description]')");
  
   // header('Location: index.php'); //this prevents from adding the same details again and again  after refreshing the page
 
   //the next few lines of the script code is mainly written so that we dont have to refresh the page everytime and the the changes will be shown automatically
   ?>

<script type="text/javascript">
alret('Details Submitted. We will contact you soon');
</script>

<?php

}

?>