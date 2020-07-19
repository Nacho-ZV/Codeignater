<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Menu2{

    private $arr_menu;

    public function __construct($array){
        $this->arr_menu= $array;
    }

    public function construirMenu(){
    
        $ret_menu= "<nav><ul>";
    
            foreach($this->arr_menu as $option){ 
                $ret_menu .= "<li>" . $option . "</li>";
            }
        $ret_menu .="</ul></nav>";
            
        return $ret_menu;

    }


}