<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style>
       
        h1 {
    margin: 0;
    display: inline-block;
    }
        
        .card:hover {
  transform: scale(1.1); 
    }
    body{
	margin: 0 auto;
	background-image: url("travel4.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}
    </style>
    <title>Admin Login</title>
  </head>
  <body>

    <h1>VENTUREintoADV</h1>
    <button type="button" class="btn btn-success btn-lg float-right" style="margin-left: 50px;" onclick="window.location.href='login.php'">logout</button>

    <br> <br> <br> <br> <br> <br> 
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">Travel Destinations</h5>
                        <p class="card-text">
                            Click below to edit/insert travel destinations and packages.
                        </p>
  
                        <a href="insert.php" class="btn btn-outline-primary btn-sm">
                            Insert/Edit
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">
  
                    <div class="card-body">
                        <h5 class="card-title">Customer enquiry</h5>
                        <p class="card-text">
                            Click below to view the bookings and contact details.
                        </p>
                          
                        <a href="displaycontact.php" class="btn btn-outline-primary btn-sm">
                            View
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>