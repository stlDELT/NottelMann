<?php
/**
* Template Name: Contact
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
    <?php the_field( 'top_header' ); ?>
  </div>

  <div class="intro_p">
  <?php the_field( 'top_paragraph' ); ?>
    <?php the_field( 'locations_text' ); ?>
  </div>

  <div class="pd"></div>

  <div class="navy">
    <div class="in">
      <div class="contain center">
        <h2 class="head3">If you want more information fill in this form. You will be contacted as soon as possible</h2>
        <div class="divide30"></div>
      </div>
      <?php the_field( 'contact_form' ); ?>

    </div>
  </div>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php // Gets footer.php
  get_footer();
  ?>
