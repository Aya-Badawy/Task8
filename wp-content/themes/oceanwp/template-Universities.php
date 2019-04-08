<?php /*Template Name: Universities*/ ?>
<?php include_once('custom-posts-Struct/header.php'); ?>
<header class="w3-container  w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Universities</h1>
  <p class="w3-xlarge">All What You need To Know and More here </p>
  <a href="<?php echo get_site_url(); ?>">
  <button class="w3-button w3-green w3-padding-large w3-large w3-margin-top">
  on hiker-onTrail.com </button></a>
</header>

<!-- First Grid -->
<div class="w3-row-padding  w3-blue w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
     <?php query_posts(array(
            'post_type'=>'Universities'
     )); ?>
      <div class="row" id="cities-template" style="margin-left:3%;">
        <?php while(have_posts()):the_post();?>
        <div class="col-6 col-md-4" style="margin-bottom:1.5%;">
  <div class="w3-card  w3-green">
  <div class="card-body">
    <h3 class="card-title"><?php the_title();?></h3><hr>
    <p class="card-text"><?php the_excerpt();?></p><hr>
    <a href='<?php the_shortlink() ?>' class="btn btn-warning">read more</a>
  </div>
</div>
  </div>
    <?php endwhile;?>
    </div>
    </div>
  </div>
</div>
  </div>
</div>

 <!-- starting of footer -->
<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Discover World Using One Click !!</h1>
</div>

<?php include_once('custom-posts-Struct/footer.php'); ?>
