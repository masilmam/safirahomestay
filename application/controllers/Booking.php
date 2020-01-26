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

      if ($checkin >= $checkout) {
        $this->session->set_flashdata('msg', 'Tanggal checkin tidak boleh lebih besar dari tanggal checkout');
        redirect(base_url('Booking'));
      }

      $jmlMalam = $checkin->diff($checkout);

      $tgl = $checkin->format('Y-m-d');
      $id_homestay = $this->input->post('id_homestay');

      $where = array(
        'tgl_checkin' => $tgl,
        'id_homestay' => $id_homestay
      );

      if ($jmlMalam->days == 1) {
        if ($this->M_homestay->check($where, 'sa_terpakai') > 0) {
          $available = FALSE; //homestay tidak tersedia
        } else {
          $available = TRUE; //homestay tersedia
        }
      } else {
        while(1) {
          if ($this->M_homestay->check($where, 'sa_terpakai') > 0) {
            $available = FALSE;
            $stop = 1;
            //homestay tidak tersedia
          break;
          }
        break;
        }
      }
      if ($stop != 1) {
        for ($i = 1; $i < $jmlMalam->days; $i++) {
          $checkin->add(new DateInterval('P1D')); //tgl checkin + 1 hari
          $tgl = $checkin->format('Y-m-d');
          $id_homestay = $this->input->post('id_homestay');
          $where = array(
            'tgl_checkin' => $tgl,
            'id_homestay' => $id_homestay
          );

          if ($this->M_homestay->check($where, 'sa_terpakai') > 0) {
            $available = FALSE; //homestay tidak tersedia
          break;
          } else {
            $available = TRUE; //homestay tersedia
          }
        }
      }

      $data_homestay = $this->M_basic->read_where('sa_homestay', array('id_homestay' => $id_homestay))->result();

      if ($available == TRUE) {
        $data = array(
          'status' => 1,
          'hasil' => 'Homestay tersedia, Booking Sekarang',
          'tgl_checkin' => $this->input->post('checkin'),
          'tgl_checkout' => $this->input->post('checkout'),
          'lama_menginap' => $jmlMalam->days,
          'homestay' => $data_homestay,
          'foto' => $this->M_homestay->read_photo_where_asc(array('id_homestay' => $id_homestay))->row()
        );
      } else {
        $data = array(
          'status' => 0,
          'hasil' => 'Maaf homestay tidak tersedia, ubah kriteria pencarian di sini',
          'tgl_checkin' => $this->input->post('checkin'),
          'tgl_checkout' => $this->input->post('checkout'),
          'lama_menginap' => $jmlMalam->days,
          'homestay' => $data_homestay,
          'foto' => $this->M_homestay->read_photo_where_asc(array('id_homestay' => $id_homestay))->row()
        );
      }

      $this->load->view('booking/result', $data);
    } //end form validation
  } //end function check()
}

?>