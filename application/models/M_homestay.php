<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_homestay extends CI_Model {
	public function check($where,$table) {
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->num_rows();
  }

  public function read_photo_where_asc($where) {
		$this->db->where($where);
		$this->db->order_by('id_foto', 'ASC');
		$this->db->limit(1);
		return $this->db->get('sa_foto_homestay');
	}
}