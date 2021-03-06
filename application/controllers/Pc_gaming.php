<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pc_gaming extends CI_Controller {

	
	 
	public function componentes_aula3()
	{
        $this->load->view('menu_proyecto/view_cabeza');
        $this->load->view('menu_proyecto/view1');
        $this->load->view('menu_proyecto/view_pies');
        
        
	}


}