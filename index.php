<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Index">

    <title>JS | Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/unslider.css">
    <link rel="stylesheet" href="assets/css/unslider-dots.css">
    <link rel="stylesheet" href="assets/css/fonts.css">




  <body>

    <!-- Static navbar. Had a lot of trouble getting the menu highlighter plugin to work with php includes, so used includes with the footer instead. -->
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
            <li class="active"><a href="index.php">Index</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h1>Jake S.</h1>
					<h4>(Advanced Front End Web Development)</h4>
				</div>
			</div>
	    </div> <!-- /container -->
	</div>
	
	<div class="container">
		<div class="container-fluid bg-3 text-center">
			<h1 class="push"> My Stuff </h1>
			<div class="row">
	    		<div class="col-sm-4">
					<img src="assets/img/roc.png" class="img-responsive" alt="University of Rochester">
				</div>
			    <div class="col-sm-4">
			    	<h4>Student at the University of Rochester.</h4> 
			    	<p>From 2013-2017(?). Middling academic record.</p>
			    	<p>Taken classes in Linguistics, Japanese, Computer Science, Art History, Comparative Literature, and English.</p>
			    </div>
			   
			</div>
	</div>
	<div class="container">
		<div class="container-fluid bg-3 text-center">

			    <div class="col-sm-4">
			    	<p> </p>
			    	<p> </p>
					<img src="assets/img/lastfm.png" class="img-responsive" alt="last.fm">		    
				</div>
			     <div class="col-sm-4">
			    	<h4>The audioscrobbler.</h4>
			    	<p>Last.fm builds a detailed profile of each user's musical taste by recording details of the tracks the user listens to, either from Internet radio stations the user's computer or many portable music devices.</p>
			    	<p> <a href="http://www.last.fm/user/JMSSRS237"> (Profile) </a></p>
			    </div>
			    </div>
			    </div>
			    
		</div>
	<div class="container">
		<div class="container-fluid bg-3 text-center">

			    <div class="col-sm-4">
					<img src="assets/img/lang.png" class="img-responsive" alt="Lang">		    
				</div>
			     <div class="col-sm-4">
			    	<h4> Languages: </h4>
			    	<p> English </p>
			    	<p> Spanish </p>
			    	<p> Japanese </p>
			    	<p> Latin </p>	
			    </div>
		   </div>
	  </div>
			    


  <!-- Footer include -->
  <?php include "assets/inc/footer.inc";?>
	
	


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </body>
</html>
