<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Practica2 extends CI_Controller{
    Public Function __constructor(){
        parent::__constructor();
        
        $this->load->helper('ayuda');
       
    }


    Function index(){

        $this->load->library('menu2', array( 'Inicio' , 'Acerca de' , 'Registro' , 'Contacto' ));
        $data['mi_menu'] = $this->menu2->construirMenu(); 
        $this->load->view('welcome_message', $data);
        //echo $this->Api2_m->test();

    }
    
    
    public function facil($name,$edad){

        $nombre = $this->Api_m->say_name($name);


        echo $nombre, $edad;


        //var_dump($ayuda);
        
        //$data['ayuda']= ayuda();
         //$this->load->view('practica2', $data);
         
         
    }

}


?>