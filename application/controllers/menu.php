<<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Menu extends CI_Controller{
    Public Function __constructor(){
        parent::__constructor();
        
        }    
        

        public function index(){
            $this->load->view('vista_menu');
            die();
           // $this->load->model('Mdm');
           //$ver_intro = $this->Mdm->principal($name);
            //echo $ver_intro;
        }
    }
    