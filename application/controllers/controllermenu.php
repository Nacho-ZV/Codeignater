<?php

defined('BASEPATH') OR exit('No direct script access allowed');
Class Controllermenu extends CI_Controller{

    public function index(){
        $elementos= array('inicio' , 'Registro' , 'Contacto' , 'Blog');
        $menu = $this->load->library('Menu_library' , $elementos); 
        $data['menu_nuevo']= $this->menu_library->construct_menu();
        $this->load->view('vistademenu' , $data);


    }
}


?>