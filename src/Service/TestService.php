<?php

namespace App\Service;


class TestService {

    public function metodoDePruebas(): string
    {

        $hola = 'hola sheep!';

        return $hola;
    }

    public function suma ($o1, $o2){

        return $o1+$o2;

    }
    
    public function suma2 ($o1,$o2,$o3){
     
        return $o1+$o2+$o3;
        
    }

}

