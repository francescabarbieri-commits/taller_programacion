<?php
    
//ej 1 video 26
    $a=7 ;
    $x= 10 ;
    $y= 9 ;
    $z= 7;
    $resultado= match ($a) {
        $x => "Valor igual a x"."<br>" ,
        $y => "Valor igual a y"."<br>" ,
        $z => "Valor igual a z"."<br>",
        default => "No coincide con ninguna variable"."<br>"
    };

    echo $resultado;

//ej 2 video 26

    $a= "7" ;
    $x= 10 ;
    $y= 9 ;
    $z= 7;
    $resultado= match ($a) {
        $x => "Valor igual a x"."<br>" ,
        $y => "Valor igual a y"."<br>" ,
        $z => "Valor igual a z"."<br>" ,
        default => "No coincide con ninguna variable"."<br>"
    };

    echo $resultado;

//ej 3 video 26

    $a= "7" ;
    $x= 10 ;
    $y= 9 ;
    $z= 7;
    $resultado= match ($a) {
        $x => "Valor igual a x"."<br>" ,
        $y => "Valor igual a y"."<br>" ,
        7 => "Hola Mundo"."<br>" ,
        default => "No coincide con ninguna variable"."<br>"
    };

    echo $resultado;

//ej 4 video 26

    $a= "7" ;
    $x= 10 ;
    $y= 9 ;
    $z= 7;
    $resultado= match ($a) {
        $x, $y => "Valor igual a x o y"."<br>" ,
        $z => "Valor igual a z"."<br>" ,
        default => "No coincide con ninguna variable"."<br>"
    };


//ej 5 video 26
    $edad=18;
    
    $resultado = match(true){
        $edad >= 60 => "Eres de la tercera edad",
        $edad >= 30 => "Eres adulto",
        $edad >= 18 => "eres adulto joven",
        default => "Eres un niño"
};


    echo $resultado;
