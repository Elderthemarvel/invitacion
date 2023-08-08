<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		//Si existe la cookie de asistencia, enviamos la data de la cookie a la vista
		if($this->input->cookie('asistencia')){
			$data['asistencia'] = $this->input->cookie('asistencia');
		}else{
			$data['asistencia'] = false;
		}
		$this->load->view('invitacion', $data);
	}

	public function asistenia(){
		$post = $this->input->post();

		//Guardamos los datos en la base de datos
		$save = $this->db->insert('asistencia', $post);

		if($save){
			//Si se guardo correctamente, creamos una cookie con 3 meses de duracion
			$cookie = array(
				'name'   => 'asistencia',
				'value'  => 'true',
				'expire' => '2592000',
				'domain' => 'localhost',
				'path'   => '/',
				'prefix' => 'asistencia_',
				'secure' => TRUE
			);
			$this->input->set_cookie($cookie);
			echo json_encode(array('status' => 'success'));
		}else{
			echo json_encode(array('status' => 'error'));
		}

	}
}
