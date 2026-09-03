<?php

//ejercicio 1

echo "Cafetería"."<br>"."<br>";

$pedido=1;
    do{
    echo "Pedido N° ". $pedido."<br>";
    $pedido++;
    }while($pedido<=15);


//ejercicio 2

echo "<br>"."Videojuego"."<br>"."<br>";
    $nivel=1;
    do{
        echo "Nivel ".$nivel." superado"."<br>";
        $nivel++;
    }while($nivel<=15);


//ejercicio 3

echo "<br>"."Asientos de colectivo"."<br>"."<br>";

    $asientos=20;
    do{
        echo "Asientos disponibles: ". $asientos."<br>";
        $asientos--;
    }while($asientos>=1);

//ejercicio 4

echo "<br>"."Cuenta regresiva"."<br>". "<br>";
$c=10;
    do{
        echo  $c."<br>";
        $c--;
    }while($c>=1);
echo "<br>"."Comienza la carrera!"."<br>";

//ejercicio 5

echo "<br>"."Pizzería"."<br>". "<br>";
$c=8000;
$cantPizzas=1;
    do{
        echo $cantPizzas." pizzas: $".$cantPizzas*$c."<br>";
        $cantPizzas++;
    }while($cantPizzas<=8);

//ejercicio 6

echo "<br>"."Rutina de entrenamiento"."<br>". "<br>";
$r=1;
$peso=15;
    do{
        echo $r." Repetición: ".$peso*$r."kg"."<br>";
        $r++;
    }while($r<=12);

//ejercicio 7

echo "<br>"."Stock del supermercado"."<br>". "<br>";
$v=2500;
$cajas=12;
    do{
        echo $cajas." cajas: $".$cajas*$v."<br>";
        $cajas--;
    }while($cajas>=1);

//ejercicio 8

echo "<br>"."Entradas para un recital"."<br>". "<br>";
$p=12000;
$entradas=20;
    do{
        echo $entradas." entradas: $".$entradas*$p."<br>";
        $entradas--;
    }while($entradas>=1);

//ejercicio 9

echo "<br>"."Cafetería: control de pedidos y recaudación"."<br>". "<br>";
$v=3500;
$pedidos=1;
    do{
        echo "Pedido ".$pedidos."= $".$pedidos*$v."<br>";
        $pedidos++;
    }while($pedidos<=10);
echo "<br>". "Promoción finalizada";

?>
