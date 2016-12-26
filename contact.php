<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact">

    <title>JS | Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="assets/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/unslider.css">
    <link rel="stylesheet" href="assets/css/unslider-dots.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/fonts.css">

    <!-- Form Validation -->
    <?php include "assets/js/formvalidation.php";?>

 
 


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
            <li><a href="portfolio.php">Portfolio</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<div id="contactwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
          <h1 class="headertest2"> Contact </h1>

				</div>
			</div>
	    </div> <!-- /container -->
	</div>
	
	<div class="container">
		<div class="row centered mt mb">
			<div class="col-lg-8 col-lg-offset-2">
	<form method="post" action="database-write.php">
    <fieldset>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name">
    </div>

     <div class="form-group">
      <label for="email">Email address:</label>
      <input type="text" class="form-control" name="email" id="email">
    </div>

     <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="tel" name="phone" id="phone" class="form-control" >
    </div>
   
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea name="message" id="message" rows="3" class="form-control"  placeholder="Enter a message..."></textarea>
    </div>
    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
    </fieldset>
</form>
			</div>

		</div>
	</div>
	

  <!-- Footer include -->
  <?php include "assets/inc/footer.inc";?>
  


       <!-- jQuery, Slideshow -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  </body>

</html>
