<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

foreach ($homestay as $row) {
	$nama_homestay =  $row->nama_homestay;
	$id_homestay = $row->id_homestay;
	$total = $row->rate * $lama_menginap;
}
if ($status != 1) {
	$total = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hasil Pencarian | SAFIRA Homestay</title>
  </head>
  <body>
    <?php 
      if(isset($msg)) {
    ?>
      <center><?php echo $msg; ?></center>
    <?php } ?>
    <a href="index.html"><img src="<?php echo base_url('design_landing/images/logo1.png'); ?>" width="280px" height="56px" title="logo"/></a>
  
      <h3>Hasil Pencarian</h3>
      
        <?php
          if (isset($foto->nama_foto)) {
        ?>
        <img src="<?php echo base_url('images/homestay/').$foto->nama_foto; ?>" width="309px" height="200px" />
        <?php 
          } else {
        ?>
          <img src="#"/>
        <?php } ?>
    
      <h3><?php echo $nama_homestay;?></h3>
      <p>Tanggal Check-In &nbsp;&nbsp;&nbsp;: <?php echo $tgl_checkin; ?></p>
      <p>Tanggal Check-Out : <?php echo $tgl_checkout; ?></p>
      <p><?php echo $lama_menginap; ?> Malam</p>
      <h3><u>Rp<?php echo number_format($total,0,',','.'); ?></u></h3>
  
  <?php 
  if ($status == 1) {
  ?>       
  
      <h3>Homestay Tersedia, Pesan Sekarang. <a href="#login">Sudah Punya Akun?</a></h3>
      
      <a href="#" title="Close" class="close">X</a>
      <h3>Booking Login</h3> 
      <form action="<?php echo base_url('saf/booking_login'); ?>" method="post">
        <input type="hidden" name="tgl_checkin" value="<?php echo $tgl_checkin; ?>">
    <input type="hidden" name="tgl_checkout" value="<?php echo $tgl_checkout; ?>">
    <input type="hidden" name="id_homestay" value="<?php echo $id_homestay; ?>">
    <input type="hidden" name="lama_menginap" value="<?php echo $lama_menginap; ?>">
    <input type="hidden" name="total" value="<?php echo $total; ?>">
        <label><b>Email</b></label>
        <input type="text" name="email" required="required" value="<?php echo set_value('email'); ?>">
        <?php echo form_error('email'); ?>
        <label><b>Password</b></label>
        <input type="password" name="password" required="required" value="<?php echo set_value('password'); ?>">
        <?php echo form_error('password'); ?>
        <button type="submit">Log in</button>
  </form>
  
  <h3>Booking daftar</h3>
      <form method="post" action="<?php echo base_url('Saf/booking_daftar'); ?>">
        <input type="hidden" name="tgl_checkin" value="<?php echo $tgl_checkin; ?>">
        <input type="hidden" name="tgl_checkout" value="<?php echo $tgl_checkout; ?>">
        <input type="hidden" name="id_homestay" value="<?php echo $id_homestay; ?>">  
        <input type="hidden" name="lama_menginap" value="<?php echo $lama_menginap; ?>">
        <input type="hidden" name="total" value="<?php echo $total; ?>">      
        
          <span><label>Titel</label></span>
          <span>
            <select name="titel" class="textbox">
              <option>Tn.</option>
              <option>Ny.</option>
              <option>Nn.</option>
            </select>
          </span>
      
          <span><label>Nama Depan</label></span>
          <span>
            <input type="text" name="nama_depan" class="textbox" required="required" value="<?php echo set_value('nama_depan'); ?>">
            <?php echo form_error('nama_depan'); ?>
          </span>
      
          <span><label>Nama Belakang</label></span>
          <span>
            <input type="text" name="nama_belakang" required="required" value="<?php echo set_value('nama_belakang'); ?>" class="textbox" >
            <?php echo form_error('nama_belakang'); ?>
          </span>
      
          <span><label>Nomor Telepon</label></span>
          <span>
            <input type="text" name="telepon" required="required" value="<?php echo set_value('telepon'); ?>" class="textbox" pattern="[0-9]+" title="Hanya boleh diisi angka" >
            <?php echo form_error('telepon'); ?>
          </span>
        
          <span><label>Email</label></span>
          <span>
            <input type="text" name="email" required="required" value="<?php echo set_value('email'); ?>" class="textbox" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
            <?php echo form_error('email'); ?>
          </span>
        
          <span><label>Password</label></span>
          <span>
            <input type="password" name="password" required="required" value="<?php echo set_value('password'); ?>" class="textbox" >
            <?php echo form_error('password'); ?>
          </span>
        
          <span><input type="submit" value="Pesan Sekarang"></span>
      
      </form>
      
  <?php 
  } else {
  ?>
  
      <h3><a href="<?php echo base_url('Saf/main'); ?>">Maaf homestay tidak tersedia, ubah kriteria pencarian di sini</a></h3>
    
  <?php
  }
  ?>    


<p>Design by <a href="http://w3layouts.com/"> W3layouts</a></p>
  
  
  <!-- <script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> -->
  </body>
</html>