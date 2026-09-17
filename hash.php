<?php

//ej 1

$clave= "HolaMundo123";

echo md5($clave);

//ej 2 

$clave= "HolaMundo123";

echo sha1($clave);

//ej 3 

$clave= "HolaMundo123";

echo hash("md5",$clave) ."<br>"; 
echo md5($clave);

foreach(hash_algos() as $algoritmos){
    echo $algoritmos."<br>"; 

}

//ej 4

foreach(hash_algos() as $algoritmos){
    echo $algoritmos." - ".hash($algoritmos,$clave)."<br>"; 

}

//ej 5

$clave= "HolaMundo123";

echo password_hash($clave, PASSWORD_DEFAULT);

//ej 6

$clave= "HolaMundo123";

echo password_hash($clave, PASSWORD_BCRYPT,["cost"=>10 ]);


//ej 7

$clave= "HolaMundo123";

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT,["cost"=>10 ]);

echo password_verify($clave,$clave_procesada); 


//ej 8

$clave= "HolaMundo123";

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT,["cost"=>10 ]);

if (password_verify ($clave,$clave_procesada)) {
    echo "Las claves coinciden"; 
} 

//ej 9

$clave= "HolaMundo123";

$clave2= "1234567" ;

$clave_procesada=password_hash($clave, PASSWORD_BCRYPT,["cost"=>10 ]);

if (password_verify ($clave,$clave_procesada)) {
    echo "Las claves coinciden"; 
} else{
    echo "Las claves no coinciden";
} 