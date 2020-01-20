<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!---start-content---->
<div class="content">
		 	<!---start-contact---->
		 	<div class="contact">
		 		<div class="wrap">
		 			<?php 
				      if(isset($msg)) {
				    ?>
				      <div class="alert alert-warning" role="alert">
				        <center><?php echo $msg; ?></center>
				      </div>
				    <?php } ?> 
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Google Maps</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.078357349221!2d110.39310151412708!3d-7.116918194860657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7088ec8c2b9f19%3A0xa3973c2b78c90b69!2sSafira+Fountain+Homestay!5e0!3m2!1sid!2sid!4v1542111221636"></iframe>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Informasi</h3>
				    	<p><?= nl2br('The Fountain Residence
                            Blok B-26
                            Kab. Semarang, Jawa Tengah
                            Indonesia
                            Email : safirahomestay@gmail.com'); ?></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Hubungi Kami</h3>
					    <form method="post" action="#">
					    	<div>
						    	<span><label>Nama</label></span>
						    	<span><input name="nama" type="text" class="textbox"></span>
						    	<?php echo form_error('nama'); ?>
						    </div>
						    <div>
						    	<span><label>Alamat Email</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    	<?php echo form_error('email'); ?>
						    </div>
						    <div>
						     	<span><label>Nomor Telepon</label></span>
						    	<span><input name="telepon" type="text" class="textbox"></span>
						    	<?php echo form_error('telepon'); ?>
						    </div>
						    <div>
						    	<span><label>Pesan</label></span>
						    	<span><textarea name="pesan"> </textarea></span>
						    	<?php echo form_error('pesan'); ?>
						    </div>
						   <div>
						   		<span><input type="submit" value="Kirim Pesan"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
			  </div>
			</div>
			</div>
		 	<!---End-contact---->
		 <!---End-content---->