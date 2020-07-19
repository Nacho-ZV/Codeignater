<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

Class Menu_library{

    private $el_menu;
    //private $elMenu; //camelCase = cuando una variable o función tiene más de dos palabras divido con mayus
    //private $el_menu; //snake_case = separar palabras con guión bajo


public function __construct($array){
    $this->el_menu = $array;
}

public function construct_menu(){ 
    

    $return_menu = '<nav><ul>';
        foreach($this->el_menu as $options){     
            //una vez que creamos la variable, al momento de usarla 
            //no hay que poner signo de dolar ($)

        
        $return_menu .= '<li>' . $options . '</li>';
        }

        $return_menu .= '</ul></nav>';

    return $return_menu;
    }
}

/*<nav>
    <ul>
        <li> inicio </li>
        <li> registro </li>
    </ul>
</nav>*/

?>


