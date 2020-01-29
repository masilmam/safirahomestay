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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="mt-3">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url();?>">
          <img src="<?= base_url('assets/landing/images/logo1.png'); ?>" width="280px" height="56px" title="logo"/>
        </a>
      </nav>
    </div>  
  
    <div class="container">
      <u><h3 class="text-center mt-3">Hasil Pencarian</h3></u>
      <div class="card mb-3 mt-3 bg-light" style="max-width: 100%;">
        <div class="row no-gutters">
          <div class="col-md-4">
              <?php
                if (isset($foto->nama_foto)) {
              ?>
              <img src="<?= base_url('images/homestay/7.jpg'); ?>" class="card-img" alt="Safira Homestay">
              <?php 
              } else {
              ?>
                <img src="#" class="card-img" alt="Safira Homestay">
              <?php } ?>
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h3 class="card-title"><?= $nama_homestay;?></h3>
              <p class="card-text">Tanggal Check-In &nbsp;&nbsp;&nbsp;: <?= $tgl_checkin; ?></p>
              <p class="card-text">Tanggal Check-Out : <?= $tgl_checkout; ?></p>
              <p class="card-text"><?= $lama_menginap; ?> Malam</p>
              <h3><u>Rp<?= number_format($total,0,',','.'); ?></u></h3>
            </div>
          </div>
        </div>
      </div>
      
      <?php
      if ($status == 1) {
      ?>
      <div class="card">
        <div class="card-header">
          <h5 class="card-title text-center">Homestay Tersedia, Booking Sekarang</h5>
        </div>
        <div class="card-body">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Booking</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sudah Punya Akun?</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <form method="post" action="#" class="needs-validation" novalidate>
                <input type="hidden" name="tgl_checkin" value="<?= $tgl_checkin; ?>">
                <input type="hidden" name="tgl_checkout" value="<?= $tgl_checkout; ?>">
                <input type="hidden" name="id_homestay" value="<?= $id_homestay; ?>">  
                <input type="hidden" name="lama_menginap" value="<?= $lama_menginap; ?>">
                <input type="hidden" name="total" value="<?= $total; ?>">
                <div class="form-row">
                  <div class="col-md-2 mb-3 mt-3">
                    <label>Titel</label>
                    <select class="custom-select" name="titel" required>
                      <option value="">Pilih Titel</option>
                      <option value="Tn.">Tn.</option>
                      <option value="Ny.">Ny.</option>
                      <option value="Nn.">Nn.</option>
                    </select>
                    <div class="invalid-feedback">Silahkan pilih titel</div>
                    <div class="invalid-feedback"><?= form_error('titel'); ?></div>
                  </div>
                  <div class="col-md-5 mb-3 mt-3">
                    <label>Nama Depan</label>
                    <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" value="<?= set_value('nama_depan'); ?>" required>
                    <div class="invalid-feedback">Silahkan isi nama depan</div>
                    <div class="invalid-feedback"><?= form_error('nama_depan'); ?></div>
                  </div>
                  <div class="col-md-5 mb-3 mt-3">
                    <label>Nama Belakang</label>
                    <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" value="<?= set_value('nama_belakang'); ?>" required>
                    <div class="invalid-feedback">Silahkan isi nama belakang</div>
                    <div class="invalid-feedback"><?= form_error('nama_belakang'); ?></div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label>Nomor Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Nomor Telepon" value="<?= set_value('telepon'); ?>" pattern="[0-9]+" required>
                    <div class="invalid-feedback">Silahkan isi nomor telepon</div>
                    <div class="invalid-feedback"><?= form_error('telepon'); ?></div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Alamat Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Alamat Email" value="<?= set_value('email'); ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <div class="invalid-feedback">Silahkan isi alamat email</div>
                    <div class="invalid-feedback"><?= form_error('email'); ?></div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password"  required>
                    <div class="invalid-feedback">Silahkan isi password</div>
                    <div class="invalid-feedback"><?= form_error('password'); ?></div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div> -->
                <input type="submit" value="Booking Sekarang" class="btn btn-primary">
              </form>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Login</div>
          </div>
        </div>
      </div>
      
      <?php 
      } else {
      ?>
       <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center"><a href="<?= base_url('Booking'); ?>">Maaf homestay tidak tersedia, ubah kriteria pencarian di sini</a></h5>
        </div>
      </div>
      <?php
      }
      ?>
    </div> <!-- end container -->

    <?php 
      if(isset($msg)) {
    ?>
      <center><?= $msg; ?></center>
    <?php } ?>

  <?php 
  if ($status == 1) {
  ?>       
  
      <h3>Homestay Tersedia, Pesan Sekarang. <a href="#login">Sudah Punya Akun?</a></h3>
      
      <a href="#" title="Close" class="close">X</a>
      <h3>Booking Login</h3> 
      <form action="<?= base_url('saf/booking_login'); ?>" method="post">
        <input type="hidden" name="tgl_checkin" value="<?= $tgl_checkin; ?>">
    <input type="hidden" name="tgl_checkout" value="<?= $tgl_checkout; ?>">
    <input type="hidden" name="id_homestay" value="<?= $id_homestay; ?>">
    <input type="hidden" name="lama_menginap" value="<?=$lama_menginap; ?>">
    <input type="hidden" name="total" value="<?= $total; ?>">
        <label><b>Email</b></label>
        <input type="text" name="email" required="required" value="<?= set_value('email'); ?>">
        <?= form_error('email'); ?>
        <label><b>Password</b></label>
        <input type="password" name="password" required="required" value="<?= set_value('password'); ?>">
        <?= form_error('password'); ?>
        <button type="submit">Log in</button>
  </form>    
  <?php } ?>

    <script>
    // JS Form validation starter
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

  </body>
</html>