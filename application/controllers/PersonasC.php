<?php

class PersonasC extends CI_Controller{
	
	public function __construct(){
		parent:: __construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('PersonaModel');
		$this->load->library('form_validation');
		$this->load->database();
	}

	function index(){

	}

	public function listado(){
		$vdata['personas']=$this->PersonaModel->findAll();
		$this->load->view('personas/listado',$vdata);
	}

	public function guardar($persona_id = null){
		$this->form_validation->set_rules('nombre','Nombre','required');
		$this->form_validation->set_rules('apellido','Apellido','required');
		$this->form_validation->set_rules('edad','Edad','required');

		$vdata["nombre"]=$vdata["apellido"]=$vdata["edad"]="";
			if(isset($persona_id)){
				$persona= $this->PersonaModel->find($persona_id);

				if(isset($persona)){
					$vdata["nombre"]=$persona->nombre;
					$vdata["apellido"]=$persona->apellido;
					$vdata["edad"]=$persona->edad;
				}
			}

		if($this->input->server('REQUEST_METHOD')=="POST"){
			$data["nombre"]=$this->input->post("nombre");
			$data["apellido"]=	$this->input->post("apellido");		
			$data["edad"]=$this->input->post("edad");
			if($this->form_validation->run()){
			if(isset($persona_id)){
				$this->PersonaModel->update($persona_id,$data);
			}else{
				$this->PersonaModel->insert($data);
			}
			}
		}
				$this->load->view('personas/guardar',$vdata);

	}

	public function borrar($persona_id=null){
		$this->PersonaModel->delete($persona_id);
		redirect('/PersonasC/listado');
	}

	public function borrar_ajax($persona_id=null){
		$this->PersonaModel->delete($persona_id);
		echo 1;
	}

	public function ver($persona_id=null){
		
		if(!isset($persona_id)){
			show_404();
		}

		$persona= $this->PersonaModel->find($persona_id);

		if(!isset($persona)){
			show_404();

		}

			if(isset($persona)){
				$vdata["nombre"]=$persona->nombre;
				$vdata["apellido"]=$persona->apellido;
				$vdata["edad"]=$persona->edad;
			}else {
			$vdata["nombre"]=$vdata["apellido"]=$vdata["edad"]="";
		}
		$this->load->view('personas/ver',$vdata);
	}
}
?>