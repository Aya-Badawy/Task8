<!DOCTYPE html>
<html lang="en">
<head>
<title>Discover</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <style>
 .container{
   margin-right:15%;
   margin-left:15%;
 }
 #link,h2{
  text-align: center;
 }
 </style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="<?php echo get_site_url(); ?>" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
   
  </div>

<div class="container">

   
    <?php
				// Elementor `single` location
				if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
					
					// Start loop
					while ( have_posts() ) : the_post();?>

          <!-- content show -->
          <div class="w3-container">
          <p id="link">
          <a  class="w3-yellow" href="<?php echo get_site_url(); ?>" target="_blank">
          <button class="w3-button w3-round-xlarge">hicker-onTrail.com</button>
          </a></p>



  <div class="w3-card-2">
    <header class="w3-container w3-blue">
      <h2><?php the_title();?> </h2>
    </header>

    <div class="w3-container">
      <p><?php the_content(); ?></p>
    </div>

    <footer class="w3-container w3-blue">
      <h5>Written By : <?php the_author(); ?></h5>
    </footer>
  </div>
</div>

            
<?php endwhile; } ?>  
</div>
</body>
</html>
