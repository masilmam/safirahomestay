<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
  public function __construct() {
		parent::__construct();
		// $this->load->model(array('M_basic'));
		// $this->load->helper(array('url','form'));
		// $this->load->library(array('session','form_validation'));
	}
  public function index() {
    $data = array(
      'homestayList' => $this->M_basic->read_where('sa_homestay', array('deleted' => 'no'))->result()
    );
    $this->load->view('booking/index', $data);
  }
}

?>