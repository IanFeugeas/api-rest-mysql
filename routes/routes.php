<?php

$arrayRoutes= explode("/", $_SERVER['REQUEST_URI']);

echo $_SERVER['REQUEST_URI'];

    $json=array(

        "detalle"=>"no encontrado"
    );

    echo json_encode($json,true)


?>