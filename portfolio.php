<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio">

    <title>JS | Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/unslider.css">
    <link rel="stylesheet" href="assets/css/unslider-dots.css">
    <link rel="stylesheet" href="assets/css/fonts.css">


  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CSC 174 Project 3</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


  <div id="portfoliowrap">
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1 class="headertest"> My Portfolio </h1>
        </div>
      </div>
      </div> <!-- /container -->
  </div>
  

  <div class="container">
    <div class="row centered mt mb">
      <div class="col-lg-8 col-lg-offset-2">
          <div class="my-slider">
            <ul>
              <li><img src="assets/img/project1.png" class="img-responsive" alt="Porject 1"><h4> Project 1: Music</h4> <p>Worked with Danny Diaz-Etchevehere, Ruairi Conway, Gunnar Zemering, and Teron Russell on the first group project. We decided to make our site about music.</p>
              <p>As the "content manager," I was responsible for filling every page with content. I decided what text to use, and also selected and edited each image for display. <a href="http://urcsc170.org/jsocolow/Project1">(Project site)</a> </p> </li>
              <li><img src="assets/img/project2.png" class="img-responsive" alt="Project 2"><h4>Project 2: Customer Website </h4><p>Worked with Danny Diaz-Etchevehere, Ruairi Conway, Gunnar Zemering, and Teron Russell on revamping another group's Project 1 website.</p> <p> I found appropriate videos to embed on each page, and added an assortment of vector icons throughout the site. <a href="http://urcsc170.org/jsocolow/Project2/">(Project site)</a> </p></li>
              <li><img src="assets/img/lab9.png" class="img-responsive" alt="Lab 9"><h4> Lab 9: Principles of Page Design </h4> <p>I worked with Danny Diaz-Etchevehere on this site for Lab 9, focusing on Studio Ghibli, the famed animation studio.</p><p>For the second section of the page, I tried to organize the content to resemble the F-pattern. I also made a card for the colophon section. <a href="http://urcsc170.org/jsocolow/lab09/">(Site)</a></p></li>
              <li><img src="assets/img/170project3.png" class="img-responsive" alt="CSC170 Project 3"> <h4> CSC 170 Project 3 </h4> <p>The final project for CSC 170.</p>
              <p> Using everything we learned during the course, the goal was to design a website focusing on 4 different innovators in science and technology. <a href="http://urcsc170.org/jsocolow/CSC170/project3/">(Project site)</a> </p></li>
              <li><img src="assets/img/stopmotion2.png" class="img-responsive" alt="Stop-motion"><h4>Stop-Motion Animation: "Inter-Travel" </h4> <p>The final project for FMS 207 involved making our own animation, so our group came up with the idea to simulate a road trip around the globe. </p> <p>With over a dozen locations around the world, we used about 1,500 photos from Google Maps and stitched them together to create a sense of movement. <a href="https://vimeo.com/195479048">(Link to video)</a></p></li>
            </ul>
          </div>

    </div>
    </div>
  </div>

  
<!-- Footer include -->
  <?php include "assets/inc/footer.inc";?>


       <!-- jQuery, Slideshow -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="assets/js/unslider.js"></script>

    <script>
      jQuery(document).ready(function($) {
        $('.my-slider').unslider();
      });
    </script> 
  </body>
</html>
