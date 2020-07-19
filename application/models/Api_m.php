<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_m extends CI_Model{
	
	public function say_name($name){
		return "<h1>Hola " . $name . $this->get_today() . "</h1>";
    }
    
    public function get_today(){
        $dia = date('d');
        $mes = date('m');
        $anio = date('Y');
        return '<h1>Hoy es ' . $dia . ' del mes ' . $mes . ' del año ' . $anio . ' </h1>';
    }


}	

		
	