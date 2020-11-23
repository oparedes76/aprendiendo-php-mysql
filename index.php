<?php
//conectar a una base de datos

$conexion = mysqli_connect('localhost','root','ogPC.2k76','phpmysql');

//comprobacion
if (mysqli_connect_errno()) {
    echo "La conexiona a la base de datos mysql ha fallado:". mysqli_connect_errno();
}else {
    echo "La conexión se ha realizado exitosamente</br>";
}


//setear caracteres, se hace consulta para configurar la codificación de caracteres

mysqli_query($conexion,"SET NAMES 'utf8'");

//consulta select desde php

$query = mysqli_query($conexion,"select * from notas");

while ($nota = mysqli_fetch_assoc($query)) {
    # code...
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo '<p>'.$nota['descripcion'].'</p>';
}

//insertar en la base de datos

$sql = "INSERT INTO notas VALUES (null,'nota 4','esta es la nota insertada también por OP el año 2020 con id','blue')";
$insert = mysqli_query($conexion,$sql);

if ($insert) {
    echo 'Datos insertados correctamente con código: '.mysqli_insert_id($conexion);
}else{echo 'Error: '.mysqli_error($conexion);}
    



