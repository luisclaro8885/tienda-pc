<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Componentes_pc extends CI_Controller {

	
	 
	public function componentes_aula2()
	{
        $this->load->view('menu_proyecto/view_cabeza');
        $this->load->view('menu_proyecto/view5');
        $this->load->view('menu_proyecto/view_pies');
        
        
	}


}
