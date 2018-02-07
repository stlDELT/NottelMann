<?php
/**
* Template Name: Locations
*/
get_header('products'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="banner">
    <img src="http://127.0.0.1/wordpress/wp-content/uploads/2018/02/clark-young-143623.jpg" alt="Instrument repairs in St. Louis">
  </div>
<div class="page_title">
  <h4>Get in Touch</h4>
  <h1>Contact Nottelmann Music Company</h1>
</div>

<div class="intro_p">
  <div class="row">
    <div class="col-sm-4 contactlocal">
      <h4 style="color:#28353c">South County Store</h4>
      <p>1590 Lemay Ferry Rd.<br>
        St. Louis, MO 63125<br>
        Ph: 314-631-1486<br>
        <a><b>MORE INFORMATION</b></a></p>
    </div>
    <div class="col-sm-4 contactlocal">
      <h4 style="color:#28353c">South County Store</h4>
      <p>1590 Lemay Ferry Rd.<br>
        St. Louis, MO 63125<br>
        Ph: 314-631-1486<br>
        <a><b>MORE INFORMATION</b></a></p>
    </div>
  </div>
</div>

<div class="pd"></div>

<div class="navy">
  <div class="in">
    <div class="contain center">
      <h2 class="head3">If you want more information fill in this form. You will be contacted as soon as possible</h2>
      <div class="divide30"></div>
    </div>
    <div class="container">
      <div class="row center instru">
        <div class="col-sm-6">
          <input type="text" placeholder="Your name">
        </div>
        <div class="col-sm-6">
          <input type="text" placeholder="Email address">
        </div>
        <div class="col-sm-6">
          <input type="text" placeholder="Phone number">
        </div>
        <div class="col-sm-6">
          <input type="text" placeholder="School (if necessary)">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Your message" style="height: 200px;">
        </div>
        <div class="col-sm-6">
          <button class="mb2" style="background:#2457ca">contact us</button>
        </div>
      </div>
    </div>
  </div>
</div>
