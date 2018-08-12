<?php
   
    function calcular($tp)
    {
       
     $txtcaixa1 = (float) $_POST['txtcaixa1'];
     $txtcaixa22 = (float) $_POST['txtcaixa2'];
   
    $resultado = 0;
       
    if ($tp == 1){
        $resultado = $txtcaixa1 + $txtcaixa2;
       
    }else if ($tp == 2){
        $resultado = (float) ($txtcaixa1 - $txtcaixa2);
       
    }else if ($tp == 3){
        $resultado = (float) ($txtcaixa1 * $txtcaixa2);
       
    }else if ($tp == 4){
        $resultado = (float) ($txtcaixa1 / $txtcaixa2);
       
    }
}