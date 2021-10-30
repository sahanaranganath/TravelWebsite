<?php
include "connectiontocontact.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>VENTUREintoADV</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script>
  function showAlert() {
    alert ("Your Deatails have been submitted successfully. Our team will get back to you soon");
  }
  </script>
   
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="img/jpg" href="icon.jpeg">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!---Navbar-->  
    <nav class="navbar navbar-expand-lg navbar-light main-navbar
      bg m-navbar-light" id="main-navbar">
      <div class="container">
          <a class="navbar-brand"href="#" style="color: white;">VENTUREintoADV</a>
          <button class="navbar-toggler"type="button"data-toggle="collapse"
          data-target="#my-nav" aria-controls="p-nav"aria-expanded="false"
          aria-label="toggle-navigation">
        <span style="color: white;" >Menu</span>
        </button>
        <div class="collapse navbar-collapse"id="my-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="index.html"class="nav-link" style="color: white;">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#About"class="nav-link" style="color: white;">About</a>
                </li>
                <li class="nav-item">
                    <a href="#popular places"class="nav-link" style="color: white;">Popular Places</a>
                </li>
                <li class="nav-item">
                    <a href="#packages"class="nav-link" style="color: white;">Packages</a>
                </li>
                <li class="nav-item">
                    <a href="#services"class="nav-link" style="color: white;">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#Contact"class="nav-link" style="color: white;">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="#admin"class="nav-link" style="color: white;">Admin</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>
    <!--End of navbar-->
    <!---Hero-Image-->
    <section class="hero-wrap"
    style="background-image:url('background.jpeg');">
    
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters main-text align-items-center">
            <div class="col-lg-7 col-md-6 d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4 text-capitalize">MAKE YOUR TOUR AMAZING WITH US<br>
                        
                      </h1>
                      <p style="font-size:18px;">
                    The best travel website <br>         ~Be a TRAVELER, not a Tourist </p>
                    <a href="#Contact" class="btn btn-hero py-2 px-3">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!---End of Hero-Image-->
<section>
    <div class="hero">

        
        
        <div class="hero__content">
           <div id="About" class="about-section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center heading-section mb-5">
                <h2 class="text-black mb-2" style="color: black;"><br>Welcome To VENTURE into ADV</h2>
                <p >Discover and book your unique travel experience offered by us. </p>
        </div>
    
    </div>


<!---Welcome/about section-->

      <div class="card-group">
            <div class="card">
              <img src="culture.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Culture</h5>
                <p class="card-text"> Understanding different cultures is more than having an appreciation for our differences, but paving the way for a new world where we all stand together.</p>
               
              </div>
            </div>
            <div class="card">
              <img src="history.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">History</h5>
                <p class="card-text">Stories bring places to life, and places attach special meaning to stories. Every story takes place somewhere, and every place has a story to tell.</p>
         
              </div>
            </div>
            <div class="card">
              <img src="nature.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nature</h5>
                <p class="card-text">Nature travel offers the thrill of discovering something new, or at the very least, something only a fraction of people have seen in person.</p>
               
              </div>
            </div>
          </div>

</section>
<!------------->
<!---Popular Places-->
<section id="popular places">
      <!-- Popular Places -->
      <div class="popular section-bg img-effect mt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
        <div class="section-title text-center">                      
          <h1 style="color: black;">Popular Places </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End of Popular Places-->
    <!-- Other Popular  -->
    <div class="all-image">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5">
                    <div class="single-img">
                        <div class="img-thumb">
                            <img src="paris.jpg" alt="">
                        </div>
                        <div class="img-hover">
                            <div class="title">
                                    <h3>Paris</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="single-img">
                        <div class="img-thumb">
                            <img src="ny.jpg" alt="">
                        </div>
                        
                        <div class="img-hover">
                            <div class="title">
                                    <h3>New York</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single-img radial">
                        <div class="img-thumb">
                            <img src="london.jpg" alt="">
                        </div>
                       <div class="img-hover">
                        <div class="title">
                        <h3>London</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single-img radial">
                        <div class="img-thumb">
                            <img src="tokyo.jpg" alt="">
                        </div>
                         <div class="img-hover">
                            <div class="title">
                                    <h3>Tokyo</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-lg-4">
                    <div class="single-img radial">
                        <div class="img-thumb">
                            <img src="maldives.jpg" alt="">
                        </div>
                     <div class="img-hover">
                            <div class="title">
                                    <h3>Maldives</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              </div>
    </div>
    </section>

<!--end of Popular Places-->
<section id="packages">
    <button type="button" class="btn btn-primary btn-lg" style="margin-left: 40%;" onclick="window.location.href='package.php'">View Packages</button>
</section><br><br>

<!---services Section-->
<section id="services" class="services section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title">
                    <h2>Services We Provide</h2>
                    <p>
                        Best in the business for a reason
                    </p>
                </div>
            </div>
            <!----->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="icon-circle purple">
                            <div class="icon">
                                <i class="fas fa-drumstick-bite"></i>
                            </div>
                            <h4 class="text-white">Good Food</h4>
                            <p>The restaurants have a bustling atmosphere with lots of diners and hubbub.</p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-circle pink">
                            <div class="icon">
                                <i class="fas fa-umbrella-beach"></i>
                            </div>
                            <h4 class="text-white">Beach Resort</h4>
                            <p>Ocean front, gorgeous pool areas, beautiful bar and restaurant, excellent service with historic, very well appointed rooms.</p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-circle yellow">
                            <div class="icon">
                                <i class="fas fa-hiking"></i>
                            </div>
                            <h4 class="text-white">Mountain-climbing</h4>
                            <p>There’s nothing quite like standing at the top of a mountain, with the clouds and the rest of the world stretched out below you.</p>
                        </div>
                    </div>
                    <!---->
                    <div class="col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-circle blue">
                            <div class="icon">
                                <i class="fas fa-mountain"></i>
                            </div>
                            <h4 class="text-white">Hot Air Ballon</h4>
                            <p>Experienced pilot,completely safe.The most scenic view.</p>
                        </div>
                    </div>
                    <!---->
    
    
                </div>
            </div>
        </div>
    </div>
</section>
<!---End of Services Section-->


<!--- Team Section-->
<section class="team section-bg mt-5">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">Our Team</h2>
            <p class="text-center">We have</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="harry.jpg"class="img-fluid"alt="">
                        <div class="social">
                            <a href="http://www.youtube.com/W2S"><i class="fab fa-youtube"></i></a>
                            <a href="http://www.twitter.com/Wroetoshaw"><i class="fab fa-twitter"></i></a>
                            <a href="http://www.instagram.com/Wroetoshaw"><i class="fab fa-instagram"></i></a>
                            
                        </div>

                    </div>
                    <div class="member-info">
                        <h4>Harry Lewis</h4>
                        <span>Personl Guide</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="ethan.jpg"class="img-fluid"alt="">
                        <div class="social">
                            <a href="http://www.youtube.com/Behzinga"><i class="fab fa-youtube"></i></a>
                            <a href="http://www.twitter.com/Behzinga"><i class="fab fa-twitter"></i></a>
                            <a href="http://www.instagram.com/Behzingagram"><i class="fab fa-instagram"></i></a>
                          
                        </div>

                    </div>
                    <div class="member-info">
                        <h4>Ethan Payne</h4>
                        <span>Head Chef</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="mm.jpg"class="img-fluid"alt="">
                        <div class="social">
                            <a href="http://www.youtube.com/Miniminter"><i class="fab fa-youtube"></i></a>
                            <a href="http://www.instagram.com/Miniminter"><i class="fab fa-twitter"></i></a>
                            <a href="http://www.twitter.com/Miniminter"><i class="fab fa-instagram"></i></a>
                         
                        </div>

                    </div>
                    <div class="member-info">
                        <h4>Simon Minter</h4>
                        <span>Mt.Climbing Expert</span>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="vik.jpg"class="img-fluid"alt="">
                        <div class="social">
                            <a href="http://www.youtube.com/Vikkstar123"><i class="fab fa-youtube"></i></a>
                            <a href="http://www.twitter.com/Vikkstar123"><i class="fab fa-twitter"></i></a>
                            <a href="http://www.instagram.com/Vikkstagram"><i class="fab fa-instagram"></i></a>
                            
                        </div>

                    </div>
                    <div class="member-info">
                        <h4>Vikram Singh</h4>
                        <span>Pilot</span>
                    </div>
                </div>
            </div>
            <!---->



        </div>
    </div>
</section>
<!---End of Team Section-->




<!---Customers Section-->
<section class="testimonial-section mt-5">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Happy Customers</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="test-date">
                        25/09/2021
                    </div>
                    <h4>Iceland Trip Review: 9-Night Family Trip Reykjavik, Southern Coast.

                    </h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Excellent service with easy access to tours and accommodation packages.Our trip to Iceland was fantastic and extremely well-rounded. We were traveling with two adults and two teenagers, and we covered Reykjavik and the southern coast. Andres curated a trip that kept everyone's attention. They had a very comfortable, spacious all-terrain vehicle that our guide used most of the trip. </p>
                    <div class="customer">
                        <div class="customer-photo">
                            <img src="kd.jpg"alt="">
                        </div>
                        <div class="test-text">
                            <h6>James Bryant<span>Brazil</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!----->
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="test-date">
                        28/09/2021
                    </div>
                    <h4>Italy Travel Review: Venice, Florence, Tuscany, Cinque Terre, Sorrento, Rome, 16-day trip, Vineyards & Food Tours.

                    </h4>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>The trip was amazing, a once in a lifetime opportunity and trip. My sister and I spent 16 days in Italy for her high school graduation trip, and we had an unparalleled experience. We went from Venice to Florence/Tuscany to Cinque Terre to Sorrento to Rome. Everything in each city and in between was incredible. The team scheduled activities / events for us where we wanted them to, and left a portion of the trip for us to plan ourselves. Absolutely breathtaking, and the team at VENTUREintoADV did a superb job.</p>
                    <div class="customer">
                        <div class="customer-photo">
                            <img src="curry.jpg"alt="">
                        </div>
                        <div class="test-text">
                            <h6>Michael Curry <span>Australia</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!----->
        </div>
    </div>
</section>
<!---End of Customers Section-->





<!---Contact Section-->
<section id="Contact" class="contact mt-3">
<div class="container">
    <div class="section-title">
        <h2 class="text-center">
            Contact Us
        </h2>
        <p class="text-center">
          For any further information and help you can contact us
        </p>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="icon-box">
                        <i class="fas fa-share"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="#"class="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"class="facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#"class="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"class="linkedin">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="icon-box mt-4">
                        <i class="fas fa-envelope"></i>
                        <h3>Email Us</h3>
                        <p>ventureintoadv@gmail.com</p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="icon-box mt-4">
                        <i class="fas fa-phone"></i>
                        <h3>24/7 support</h3>
                        <p>+55 1234 5678</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <form action="" name="form1" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input  type="text" class="form-control" id="firstname" placeholder="Enter name" name="firstname">
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <input  type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="description" placeholder="Enter description" name="description" rows="4"></textarea>
                </div>
                
                <button  type="submit" name="insert" class="btn btn-about" onclick="showAlert()">Submit</button>
            </form>
        </div>
    </div>
</div>
</section> <br><br>


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
<!---End of Contact Section-->

<section id="admin">
    <button type="button" class="btn btn-primary btn-lg" style="margin-left: 80%;" onclick="window.location.href='login.php'">Admin Login</button>
    
</section><br><br>


<footer >
  <div class="container py-4">
      <div class="copyright">
          &copy;Copyright<strong><span> VENTUREintoADV</span></strong>
          .All Rights Reserved
      </div>
      <div class="credits">
          Designed by <a href="#"> HJNS</a>
      </div>
  </div>
 
<section>
  <div class="foreground"></div>

<div class="midground">
  <div class="tuna"></div>
</div>

<div class="background">
</div>
</section>
</footer>



















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>