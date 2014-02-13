<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() 
	{     
    	parent::__construct();
    	$this->load->library('template');
    	$this->load->model('usuario');
	}

	public function index()
	{    
		$rows=$this->usuario->datos_medico();
		$data['totalmedicos']=$rows[0];
		$data['medicos']=$rows[1];
		$especialidades=$this->usuario->cat_especialidad();
		$esp="<option>Todas las Especialidades</option>";
		
		    if($especialidades){
		    
		    foreach($especialidades as $row){
		        $esp.="<option> $row->especialidad </option>";
		    }
		}
		$this->template->write('especialidades', $esp);
		$this->template->write('title', 'Medica top');
		$this->template->write_view('content', 'indexmedicatop',$data);
		$this->template->render();
		
	}
	
	public function contacto(){
	    $this->template->write('title', 'Medica top');
		$this->template->write_view('content', 'contacto');
		$this->template->render();
    }
    
    public function perfil($id=""){
    	
	    $this->template->write('title', 'Medica top');
		$this->template->write_view('content', 'perfil');
		$this->template->render();
    }

	 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
