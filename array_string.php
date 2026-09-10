<?php

//ej 1
$fecha_1= "12/06/2010";
$fecha_2= "09-09-2026";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("/",$fecha_1);

echo $array_fecha[0];

//ej 2

$fecha_1= "12/06/2010";
$fecha_2= "09-09-2026";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("-",$fecha_2);

echo $array_fecha[2];

//ej 3
 
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros);

echo $array_numeros[3];

//ej 4-limitador

$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,2);

echo $array_numeros[1];

//ej 4 -  limitador con numeros negativos

$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_numeros=explode(" ",$numeros,2);

echo $array_numeros[1];

