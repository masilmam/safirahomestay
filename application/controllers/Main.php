<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
  public function index() {
    $data = array('judul' => 'Home');
    $this->load->view('landing/header',$data);
    $this->load->view('landing/index');
    $this->load->view('landing/footer');
  }
  
  public function about() {
    $data = array('judul' => 'Tentang Kami');
    $this->load->view('landing/header',$data);
    $this->load->view('landing/about');
    $this->load->view('landing/footer');
  }

  public function contact() {
    $data = array('judul' => 'Hubungi Kami');
    $this->load->view('landing/header',$data);
    $this->load->view('landing/contact');
    $this->load->view('landing/footer');
  }

  public function reservation() {
    $data = array('judul' => 'Booking');
    $this->load->view('landing/header',$data);
    $this->load->view('landing/reservation');
    $this->load->view('landing/footer');
  }
}