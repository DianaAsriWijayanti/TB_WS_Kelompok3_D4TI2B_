<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model {
	
	public function ambilSemua($where=array()){
		$query = $this->db->get_where('thread',$where);
		$query = $query->result_array();

		if ($query){
			return $query[0];
		}
	}

	
}