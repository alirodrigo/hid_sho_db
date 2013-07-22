<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function index(){
		$this->load->view('big_index.html');
	}

	function preview(){
		// $this->load->model('cargar_model');
		// $usuarios = $this->cargar_model->lograr();
		$data['header'] 			= $this->input->get("header");
		$data['logo'] 				= $this->input->get("logo");
		$data['store_name'] 		= $this->input->get("store_name");
		$data['store_description'] 	= $this->input->get("store_description");
		$this->load->view('preview', $data);
	}

	function practica(){
		$this->load->model('cargar_model');
		$data['datitos'] = $this->cargar_model->lograr();
		$this->load->view('practi', $data);
	}

	function update($ajax){
		
		if($this->input->post("var_name") AND $this->input->post("var_value")){
			$data[$this->input->post("var_name")] = $this->input->post("var_value");
			$this->Modelo_uno->actualizar_db($data);
		}

		
		
			
			// $data['i_logo'] 			= $_POST['logo'];
			// $data['i_description'] 		= $_POST['description'];
			// $this->load->model('cargar_model');
			
			// $this->index();

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */