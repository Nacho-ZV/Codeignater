<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Api2_m extends CI_Model{

    function __construct(){
        parent::__construct();

        date_default_timezone_set('America/Costa_Rica');

    }


    Public function test(){
        
        $dia = date('d');

        
        return  '<h1>Ignacio ' . "hoy es " . $dia .  '</h1>';

    }
}