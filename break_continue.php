<?php


//ejercicio 1


$c= 1;
while ($c<=20) {
    echo $c. "<br>";
    if ($c==10) {
    break;
    }
    $c++;
}


//ejercicio 2


$pc= ["SO", "SSD", "GPU", "RAM","CPU"];
foreach ($pc as $componente) {
    echo $componente."<br>" ;
    if ($componente == "GPU") {
        break ;
    }
}

//ejercicio 3


$pc= ["SO", "SSD", "GPU", "RAM","CPU"];
foreach ($pc as $componente) {
        if ($componente == "GPU") {
        continue ;
    }
    echo $componente."<br>" ;


}


//ejercicio 4


for ($i=1; $i<=10; $i ++) {
    if ($i==5) {
    continue ;
    }
    echo $i. "<br>" ;
}


//ejercicio 5


$i=1;
while($i<=10) {
    if ($i==5) {
        $i++ ;
        continue;
    }
    echo $i. "<br>" ;
    $i++ ;
}

?>