<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
  public function __construct() {
		parent::__construct();
		// $this->load->model(array('M_basic'));
		// $this->load->helper(array('url','form'));
		// $this->load->library(array('session'));
	}
  public function index() {
    $data = array(
      'homestayList' => $this->M_basic->read_where('sa_homestay', array('deleted' => 'no'))->result(),
      'msg' => $this->session->flashdata('msg')
    );
    $this->load->view('booking/index', $data);
  }

  public function valid_date($str) {
		$d = DateTime::createFromFormat('Y-m-d', $str);

		if($d && $d->format('Y-m-d') === $str) {
			return TRUE;
		} else {
			$this->form_validation->set_message('valid_date', 'Silahkan masukkan format tanggal dengan benar (Y-m-d)');
			return FALSE;
		}
	}
  
  public function check() {
    $this->form_validation->set_rules('checkin', 'Tanggal Check-In', 'required|callback_valid_date');
    $this->form_validation->set_rules('checkout', 'Tanggal Check-Out', 'required|callback_valid_date');
    $this->form_validation->set_rules('id_homestay', 'Homestay', 'required');
		$this->form_validation->set_message('required', '{field} masih kosong, silahkan diisi');
		$this->form_validation->set_error_delimiters('<p style="color:white;">', '</p>');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'homestayList' => $this->M_basic->read_where('sa_homestay', array('deleted' => 'no'))->result(),
				'msg' => $this->session->flashdata('msg')
			);
		
			$this->load->view('booking/index', $data);
		} else {
      //proses
      $available = FALSE;
      $stop = 0;

      $checkin = new DateTime($this->input->post('checkin'));
      $checkout = new DateTime($this->input->post('checkout'));

      if($checkin >= $checkout) {
        $this->session->set_flashdata('msg', 'Tanggal checkin tidak boleh lebih besar dari tanggal checkout');
        redirect(base_url('Booking'));
      }
    }
  } //end function check()
}

?>