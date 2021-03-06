<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto extends CI_Controller {

	
	 
	public function proyecto_aula()
	{
        $this->load->view('menu_proyecto/view_cabeza');
        $this->load->view('menu_proyecto/view2');
        $this->load->view('menu_proyecto/productos');
        $this->load->view('menu_proyecto/view_pies');
        
        
	}


}
