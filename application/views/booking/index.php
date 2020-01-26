<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang di Safira Homestay</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Safira Homestay, Booking Hotel Murah, Hotel Murah di Semarang, Homestay di Semarang, Homestay Semarang, Guest House" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- font files -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet" type="text/css">
	<!-- //font files -->
	<!-- css files -->
	<link href="<?= base_url('assets/booking/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all">
	<link href="<?= base_url('assets/booking/wickedpicker.css'); ?>" rel="stylesheet" type="text/css" media="all">        
	<link href="<?= base_url('assets/booking/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all">
	<!-- /css files -->
	<!-- js files -->
	<script src="<?= base_url('assets/booking/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/booking/js/move-top.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/booking/js/easing.js'); ?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- /js files -->
</head>
<body>
	<div class="header">
	<h1>Safira Homestay Booking</h1>
</div>

    <div class="banner-top">
		<h2>Cek Ketersediaan Homestay</h2>
		<div class="banner-bottom">
			<form action="<?php echo base_url('Booking/check'); ?>" method="post">
			<div class="bnr-one">
				<div class="bnr-left">
					<p>Check In</p>
				</div>
				<div class="bnr-right">
					<input class="date" name="checkin" id="checkin" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"  autocomplete="off"=>
					<?php 
						if(isset($msg)) {
					?>	
					<p style="color: white;"><?php echo $msg; ?></p>
					<?php 
						}  
						echo form_error('checkin'); 
					?>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="bnr-one">
				<div class="bnr-left">
					<p>Check Out</p>
				</div>
				<div class="bnr-right">
					<input class="date" name="checkout" id="checkout" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"  autocomplete="off"=>
					<?php echo form_error('checkout'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="bnr-one">
				<div class="bnr-left">
					<p>Tamu Dewasa</p>
				</div>
				<div class="bnr-right">
					<select>
						<option  class="rm" value="1">1</option>
						<option  class="rm" value="2">2</option>
						<option  class="rm" value="3">3</option>
						<option  class="rm" value="4">4</option>
						<option  class="rm" value="5">5</option>
						<option  class="rm" value="6">6</option>
					</select>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="bnr-one">
				<div class="bnr-left">
					<p>Pilih Homestay</p>
				</div>
				<div class="bnr-right">
					<select name="id_homestay" id="id_homestay" >
						<option value="">Pilih Homestay</option>
						<?php foreach ($homestayList as $h) { ?>
							<option value="<?= $h->id_homestay; ?>"><?= $h->nama_homestay; ?></option>
						<?php } ?>
					</select>
					<?php echo form_error('id_homestay'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="bnr-btn">
					<input type="submit" value="Book Now">
				</form>
			</div>
		</div> <!-- End banner-bottom -->
		
		<!---start-date-piker---->
		<link rel="stylesheet" href="<?= base_url('assets/booking/css/jquery-ui.css'); ?>" />
		<script src="<?= base_url('assets/booking/js/jquery-ui.js'); ?>"></script>
		<script>
		$(function() {
				$("#checkin").datepicker({ 
					minDate : +1,
					dateFormat: 'yy-mm-dd'});
				$("#checkout").datepicker({ 
					minDate : +2,
					dateFormat: 'yy-mm-dd'
				});
			});

			$("#checkout").change(function () {
			    var startDate = document.getElementById("checkin").value;
			    var endDate = document.getElementById("checkout").value;

			    if ((Date.parse(startDate) >= Date.parse(endDate))) {
			        alert("Tanggal Check-Out harus lebih besar dari tanggal Check-In");
			        document.getElementById("checkout").value = "";
			    }
			});
		</script>
		<!---/End-date-piker---->
	</div> <!-- End banner-top -->

<div class="footer">
	<p>Safira Homestay © <script>document.write(new Date().getFullYear())</script> | Design by W3layouts</p>
</div>
</body>
</html>