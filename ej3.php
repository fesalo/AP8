<!DOCTYPE html>
<html>
<head>
    <title>Número de lotería</title>
    <meta charset="UTF-8">
</head> 
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        function dameNumero($a){
            $num=random_int(1,49);
            while(in_array($num,$a)){
                $num=random_int(1,49);
            }
            return $num;
        }
        $numLoteria=[];
        for($i=0;$i<6;$i++){
            $num=dameNumero($numLoteria);
            $numLoteria[]=$num;
        }
        $result=implode("-",$numLoteria);
        echo $result;
    }
    ?>
    <form method="POST" action="">
        <input type="submit" value="Generar">
    </form>
</body>
</html>