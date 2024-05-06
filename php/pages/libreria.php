<?php
/*
Titulo: Programa que calcula el área y perímétro de un rectángulo
Autor: Especialidad de sistemas CASD
Fecha: Febrero de 2024
Licencia: GNU GPL v3
*/

function ingresar_dato($variable){
    $dato = $_POST[$variable];
    return $dato;
 }
 
 function mostrar_mensaje($mensaje){
   echo $mensaje;
 }
 
 function generar_mensaje($mensaje, $valor){
   $texto = $mensaje." ".$valor;
   return $texto;
 }