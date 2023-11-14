<?php
$empleados = [
    'Juan'=>[
       'horas' => 40,
       'tarifa' => 15
    ],
    'Perico'=>[
       'horas' => 20,
       'tarifa' => 25
    ],
    'Andrés'=>[
       'horas' => 45
    ],
 ];

 function calculaSalario($a,$b){
   $t=$a[$b]["tarifa"];
   $h=$a[$b]["horas"];
   $s=$t*$h;
   return $s;
 }
 //$empleados=calculaSalario($empleados);
 //echo $empleados;

 foreach($empleados as $empleado => $data){
   echo "$empleado: <br>";
   foreach($data as $key => $value){
      echo "$key =$value<br>";
   }
 }
?>