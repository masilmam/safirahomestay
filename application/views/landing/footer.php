<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function limitString($x, $length) {
	if(strlen($x) <= $length) {
		echo $x;
	} else {
		$y = substr($x,0, $length) . '...';
		echo $y;
	}
}
?>

 <!---start-footer---->
 <div class="footer">
		<div class="wrap">
			<div class="footer-grid">
				<h3></h3>
			</div>
			<div class="footer-grid center-grid">
				<h3>Tentang Kami</h3>
				<p><?php limitString('Safira Homestay merupakan perusahaan yang bergerak di bidang penyedia akomodasi penginapan di Kabupaten Semarang.
Mulai beroperasi sejak tahun 2017, Safira Homestay selalu berusaha memberikan pengalaman menginap yang aman, nyaman dan sehat bagi wisatawan dengan harga yang terjangkau.', 100)?></p>
				<a href="<?= base_url('Main/about'); ?>">ReadMore</a>
			</div>
			<div class="footer-grid center-grid">
				<h3>Hubungi Kami</h3>
				<ul>
					<li><a href="#">safirahomestay@gmail.com</a></li>
					<li><a href="#">+62 857-2795-5295</a></li>
					<li><a href="#">+62 864-022-5425</a></li>
				</ul>
			</div>
			<div class="footer-grid">
				<h3></h3>
			</div>
			<div class="clear"> </div>
		</div>
		<div class="clear"> </div>
	</div>
	<div class="copy-right">
		<div class="top-to-page">
			<a href="#top" class="scroll"> </a>
			<div class="clear"> </div>
			<p>SAFIRA Homestay | Design by W3layouts</p>
		</div>
	</div>
		 <!---End-footer---->
	</body>
</html>