<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BlackPod | <?php echo "$title";?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/coin-slider.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/cufon-aller.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="<?php echo base_url();?>">black<span>pod</span> <small>Company Slogan Goes Here</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="<?php echo base_url();?>"><span>Home Page</span></a></li>
          <li><a href="<?php echo base_url();?>welcome/support"><span>Support</span></a></li>
          <li><a href="<?php echo base_url();?>welcome/about"><span>About Us</span></a></li>

          <?php
          $user_data = $this->session->userdata('user_id');
          if($user_data != NULL){
          ?>
          <li><a href="<?php echo base_url();?>welcome/logout"><span>Log out</span></a></li>
          <?php
        }
        else{

          ?>
          <li><a href="<?php echo base_url();?>welcome/sign_up"><span>Sign up</span></a></li>
          <li><a href="<?php echo base_url();?>welcome/sign_in"><span>Sign in</span></a></li>
          <?php 
        }
           ?>
          <li><a href="<?php echo base_url();?>welcome/contact"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>

      <?php
      if($slider){



      ?>

      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="<?php echo base_url();?>images/slide1.jpg" width="935" height="307" alt="" /> </a> <a href="#"><img src="<?php echo base_url();?>images/slide2.jpg" width="935" height="307" alt="" /> </a> <a href="#"><img src="<?php echo base_url();?>images/slide3.jpg" width="935" height="307" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>
      <?php  
}
      ?>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">