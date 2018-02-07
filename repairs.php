<?php
/**
* Template Name: Repairs
*/
get_header('products'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="banner">
    <?php $banner_image = get_field( 'banner_image' ); ?>
<?php if ( $banner_image ) { ?>
	<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
<?php } ?>
  </div>

  <div class="page_title">
    <h4>Instrument Repairs</h4>
    <h1>St. Louis Instrument Repair Services</h1>
  </div>

  <div class="intro_p">
    <?php the_field( 'top_paragraph' ); ?>
  </div>

  <div class="pd"></div>
  <div class="divide70"></div>

  <div class="navy">
    <?php $center_image = get_field( 'center_image' ); ?>
<?php if ( $center_image ) { ?>
	<img src="<?php echo $center_image['url']; ?>" class="imgoverlap" alt="<?php echo $center_image['alt']; ?>" />
<?php } ?>
    <div class="placehold2"></div>
    <div class="in">
      <div class="contain center">
        <?php the_field( 'center_header' ); ?>
        <div class="divide30"></div>
      </div>
      <div class="container">
        <div class="row center instru">
          <div class="col-sm-3">
            <img src="img/handshake.png" alt="Woodwind instruments for sale">
            <h2>Decades of trusted and professional repair services</h2>
          </div>
          <div class="col-sm-3">
            <img src="img/ribbon.png" alt="Woodwind instruments for sale">
            <h2>over 200+ years of combined repair experience</h2>
          </div>
          <div class="col-sm-3">
            <img src="img/creditcard.png" alt="Woodwind instruments for sale">
            <h2>affordable prices on all instrument repairs</h2>
          </div>
          <div class="col-sm-3">
              <img src="img/clock.png" alt="Woodwind instruments for sale">
            <h2>fast and easy services for any repair</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="in">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 right">
          <?php the_field( 'bottom_header' ); ?>
          <button class="mb2 righty">find a store</button>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <?php the_field( 'bottom_paragraph' ); ?>
        </div>
      </div>
    </div>
  </div>



<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer();
?>
