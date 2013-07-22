<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargar_model extends CI_Model {

	function Cargar_model() {
 			parent::__construct(); //llamada al constructor de Model.
 	}

		function lograr() {
		$data = $this->db->get_where('users', array('password' => 'claro'));
		return $data->result();
	}

	function actualizar_db($data){
		
		$this->db->where('id' = "1685");
		$this->db->update('stores', $data); 
	}

}

/* End of file cargar_model.php */
/* Location: ./application/models/cargar_model.php */



























