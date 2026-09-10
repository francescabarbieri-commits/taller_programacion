<?php

//ejercicio 1

$cadena_texto= "Hola Mundo";

$longitud=strlen($cadena_texto); 

echo $cadena_texto." tiene ".$longitud." caracteres". "<br>"; 

//ejercicio 2

$palabras=str_word_count($cadena_texto);

echo $cadena_texto." tiene ".$palabras." palabras". "<br>"; 