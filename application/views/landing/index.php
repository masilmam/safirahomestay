<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!--start-image-slider---->
	<div class="slider">					     
		<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">   
				<div data-src="<?= base_url('images/homestay/1.jpg'); ?>"></div>
				<div data-src="<?= base_url('images/homestay/2.jpg'); ?>"></div>
				<div data-src="<?= base_url('images/homestay/3.jpg'); ?>"></div>
				<div data-src="<?= base_url('images/homestay/4.jpg'); ?>"></div>
				<div data-src="<?= base_url('images/homestay/5.jpg'); ?>"></div>
				<div data-src="<?= base_url('images/homestay/6.jpg'); ?>"></div>
				<div data-src="<?= base_url('images/homestay/7.jpg'); ?>"></div>
				<div data-src="<?= base_url('images/homestay/8.jpg'); ?>"></div>
				<div data-src="<?= base_url('images/homestay/9.jpg'); ?>"></div>
		</div>
		<div class="clear"> </div>					       
	</div>					
	<!--End-image-slider-->
	 <!---start-content---->
	 <div class="content">
	 	<div class="top-grids">
			<div class="wrap">
				<div class="top-grid">
					<a href="#"><img src="<?= base_url('assets/landing/images/icon1.png'); ?>" title="icon-name"></a>
					<h3>Sales</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<a class="button" href="#">Read More</a>
				</div>
				<div class="top-grid">
					<a href="#"><img src="<?= base_url('assets/landing/images/icon2.png'); ?>"></a>
					<h3>Developments</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
					<a class="button" href="#">Read More</a>
				</div>
				<div class="top-grid last-topgrid">
					<a href="#"><img src="<?= base_url('assets/landing/images/icon3.png'); ?>" title="icon-name"></a>
					<h3>Location</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<a class="button" href="#">Read More</a>
				</div>
				<div class="clear"> </div>
			</div>
		</div> 
	 	<div class="mid-grid">
	 		<div class="wrap">
		 		<h1>Selamat Datang</h1>
		 		<h2>Homestay Nyaman di Semarang</h2>
		 		<p>Tempat tinggal nyaman dengan rumah baru dan mewah, lengkap dengan fasilitas di dalamnya serta lingkungan pegunungan yang bersih</p>
		 		<a class="button1" href="#">Pesan Sekarang!</a>
	 		</div>
	 	</div>
	 	<div class="bottom-grids">
			<div class="wrap">
				<div class="bottom-grid1">
					<h3>Fasilitas</h3>
					<ul>
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> TV LED</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> WiFi</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> Kulkas</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> 2 Kamar Tidur Double Bed (AC)</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> 1 Kamar Tidur Double Bed (Kipas Angin)</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> 1 Kamar Mandi</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> Meja Ping Pong</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> Manual Treadmill</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> Perlengkapan Dapur Lengkap</li><br />
						<li><img src="<?= base_url('assets/landing/images/marker1.png'); ?>"> Garasi 2 Mobil</li><br />
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="bottom-grid2 bottom-mid">
					<h3>Galeri</h3>
					<div class="gallery">
						<ul>
							<li><a href="<?= base_url('images/homestay/1.jpg'); ?>"><img src="<?= base_url('images/homestay/1.jpg'); ?>" alt=""></a></li>
							<li><a href="<?= base_url('images/homestay/2.jpg'); ?>"><img src="<?= base_url('images/homestay/2.jpg'); ?>" alt=""></a></li>
							<li><a href="<?= base_url('images/homestay/3.jpg'); ?>"><img src="<?= base_url('images/homestay/3.jpg'); ?>" alt=""></a></li>
							<li><a href="<?= base_url('images/homestay/4.jpg'); ?>"><img src="<?= base_url('images/homestay/4.jpg'); ?>" alt=""></a></li>
							<li><a href="<?= base_url('images/homestay/5.jpg'); ?>"><img src="<?= base_url('images/homestay/5.jpg'); ?>" alt=""></a></li>
							<li><a href="<?= base_url('images/homestay/6.jpg'); ?>"><img src="<?= base_url('images/homestay/6.jpg'); ?>" alt=""></a></li>
							<li><a href="<?= base_url('images/homestay/7.jpg'); ?>"><img src="<?= base_url('images/homestay/7.jpg'); ?>" alt=""></a></li>
							<li><a href="<?= base_url('images/homestay/8.jpg'); ?>"><img src="<?= base_url('images/homestay/8.jpg'); ?>" alt=""></a></li>
							<li><a href="<?= base_url('images/homestay/9.jpg'); ?>"><img src="<?= base_url('images/homestay/19.jpg'); ?>" alt=""></a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					<script type="text/javascript" src="<?= base_url('assets/landing/js/jquery.lightbox.js'); ?>"></script>
				    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landing/css/lightbox.css'); ?>" media="screen" />
				  <script type="text/javascript">
				    $(function() {
				        $('.gallery a').lightBox();
				    });
				    </script>
				</div>
				<div class="bottom-grid1 bottom-last">
					<h3>Testimoni</h3>
					<span>Ilmam Fauzi</span>
					<p>Homestay yang nyaman</p>
					<br>
				</div>
				<div class="clear"> </div>
			</div> <!--end-wrap--->
		</div> <!--end-bottom grid--->
	 </div> <!---End-content---->