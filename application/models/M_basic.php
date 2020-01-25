<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_basic extends CI_Model {
  public function create($table,$data) {
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}

	public function read() {

	}

	public function read_where($table,$where) {
		$this->db->where($where);
		return $this->db->get($table);
	}

	public function update($table,$data,$where) {
		$this->db->where($where);
		$this->db->update($table,$data);
		return $this->db->affected_rows();
	}

	public function delete($table,$where) {
		$this->db->delete($table,$where);
	}
}