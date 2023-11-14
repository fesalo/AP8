<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 6</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){  
        $numero=$_POST["numero"];
        $caracter=$_POST["caracter"];
        $array=[$caracter];
        function dibujoCaracter($a,$b,$arr){
            for($i=0;$i<$b;$i++){
                $d=implode("",$arr);
                array_push($arr,$a);
                array_push($arr,$a);
                echo "$d <br>";
            }
            array_pop($arr);
            array_pop($arr);
            for($i=0;$i<$b;$i++){
                array_pop($arr);
                array_pop($arr);
                $d=implode("",$arr);
                echo "$d <br>";
            }    
        }
        $dibujo=dibujoCaracter($caracter,$numero,$array);
        echo $dibujo;
         
    }    
?>
<form method="POST" action="">
    <label for="caracter">Carácter:</label>
    <input type="text" id="caracter" name="caracter" value="<?php echo $caracter ?>">
    <br>
    <label for="numero">Número:</label>
    <input type="text" id="numero" name="numero" value="<?php echo $numero ?>">
    <br>
    <input type="submit" value="Enviar">
</form> 
</body>