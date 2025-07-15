<?php

/* -------------------------------------------------------------------------------
                                BASES DE DATOS
---------------------------------------------------------------------------------*/

/* ----------------------------------LOCAL-------------------------------------------------------*/
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbDatabase = 'cubism';
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase);


//activar para comprobar la conexión a la bdd
if($conn){
    echo "todo ok";
}else{
    echo "todo mal";
}
/* ------------------------------- REMOTO ---------------------------------------------------------

$dbHost = '';
$dbUsername = '';
$dbPassword = '';
$dbDatabase = '';
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase);*/

/*if($conn){
    echo "todo ok";
}else{
    echo "todo mal";
}*/
