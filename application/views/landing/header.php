<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Selamat Datang di SAFIRA Homestay</title>
		<link href="<?= base_url('assets/landing/css/style.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="<?= base_url('assets/landing/css/slider.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
		<script type="text/javascript" src="<?= base_url('assets/landing/js/jquery.min.js'); ?>"></script> <!-- ganti ajax google api-->
		  <script type="text/javascript" src="<?= base_url('assets/landing/js/jquery.easing.1.3.js'); ?>"></script> 
		    <script type="text/javascript" src="<?= base_url('assets/landing/js/camera.min.js'); ?>"></script>
				<script type="text/javascript">
			   jQuery(function(){
				jQuery('#camera_wrap_1').camera({
					height: '500px',
					pagination: false,
				});
			});
		  </script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
	</head>
	<body>
	<!----start-wrap----->
	<div class="wrap">
		<!----start-header----->
		<div class="header"  id="top">
			<!----top-header----->
			<div class="top-header">
				<!----start-logo----->
				<div class="logo">
					<a href="<?= base_url(); ?>"><img src="<?= base_url('assets/landing/images/').'logo1.png'; ?>" width="280px" height="56px" title="logo" /></a>
				</div>
				<!----End-logo----->
				<!----start-social-icons----->
				<div class="social-icons">
					<ul>
						<li><a href="https://www.instagram.com/safirahomestay/" target="_blank"><img src="<?= base_url('assets/landing/images/').'instagram.png'; ?>" width="32px" height="32px" title="instagram" _blank/></a></li>
						<li><a href="mailto:safirahomestay@gmail.com" target="_blank"><img src="<?= base_url('assets/landing/images/').'gmail.png'; ?>" width="32px" height="32px" title="gmail" /></a></li>
						<li><a href="https://api.whatsapp.com/send?phone=6285640225425&text=Halo%20Admin%20Safira%20Homestay" target="_blank"><img src="<?= base_url('assets/landing/images/').'whatsapp.png'; ?>" width="32px" height="32px" title="whatsapp" /></a></li>
					</ul>
				</div>
				<div class="clear"> </div>
				<!----End-social-icons----->
			</div>
			<!----End-top-header----->
			<!---start-top-nav---->
			<div class="top-nav">
				<div class="top-nav-left">
					<ul>
						<li <?php if($judul == 'Home'){echo 'class="active"';} ?>><a href="<?= base_url(); ?>">Home</a></li>
						<li <?php if($judul == 'Tentang Kami'){echo 'class="active"';} ?>><a href="<?= base_url('Saf/about'); ?>">Tentang Kami</a></li>
						<li <?php if($judul == 'Hubungi Kami'){echo 'class="active"';} ?>><a href="<?= base_url('Saf/contact'); ?>">Hubungi Kami</a></li>
						<li <?php if($judul == 'Booking'){echo 'class="active"';} ?>><a href="<?= base_url('Saf/reservation'); ?>">Booking</a></li>
						<li><a href="<?= base_url('Saf/login'); ?>">Member Area</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<!---End-top-nav---->
		</div>
		<!----End-header----->
	</div>
	<!----End-wrap----->