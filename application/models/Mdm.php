<?php
die();




defined('BASEPATH') OR exit('No direct script access allowed');

class Mdm extends CI_Model{
    
    public function principal($name){ 
        return '<h1>Hola '. $name . $this->dame_fecha()'</h1>';
        //return '<h1>Bienvenido</h1>';
    }
    public function dame_fecha(){
        $dia = date('d');
        $mes = date('m');
        $anio = date('Y');
        return '<h1>Hoy es ' . $dia . 'del mes ' . $mes .'del año ' . $anio '</h1>';

    }
}


?>