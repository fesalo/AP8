<!DOCTYPE html>
<html>
<head>
    <title>Diferencia de edad</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){    
        function diferenciaEdad($a,$b){
            if($a>$b){
                $diferencia=$a-$b;
            }elseif($b>$a){
                $diferencia=$b-$a;
            }else{
                $diferencia=0;
            }
            return $diferencia;
        }
    }
    $edadMayor=$_POST["mayor"];
    $edadMenor=$_POST["menor"];
    $result=diferenciaEdad($edadMayor,$edadMenor);
    echo $result;
?>
<form method="POST" action="">
    <label for="mayor">Edad hermano mayor:</label>
    <input type="text" id="mayor" name="mayor">
    <br>
    <label for="menor">Edad hermano menor:</label>
    <input type="text" id="menor" name="menor">
    <br>
    <input type="submit" value="Enviar">
</form> 
</body>