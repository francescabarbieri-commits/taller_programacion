<?php

//ejercicio 1°

    $laptop= ["Acer Nitro", "Windows 11", "AMD Ryzen", "SSD 256GB", "RAM 24gb"];

    $frutas= [
        "frutillas"=> 100,
        "sandias"=>80,
        "bananas"=>70,
        "peras"=>50,
        "arandanos"=>40,
];

//Sintaxis 1°

foreach($laptop as $valor){
    echo "Hay ". $valor. "en el inventario"."<br>";
}

//sintaxis 2°

foreach($laptop as $clave => $valor){
    echo $clave. " = ".$valor."<br>";
}


//ejercicio 2°

$productos= [
    ["codigo"=> "A0001", "Descripción"=> "Mouse"],
    ["codigo"=> "A0001", "Descripción"=> "Teclado"],
    ["codigo"=> "A0001", "Descripción"=> "monitor"],
    ["codigo"=> "A0001", "Descripción"=> "Impresora"],
];

foreach($productos as $prod){
    echo $prod["codigo"]. " - ".$prod["Descripción"]."<br>";
}