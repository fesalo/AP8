<!DOCTYPE html>
<html>
<head>
    <title>Números romanos</title>
    <meta charset="UTF-8">
</head> 
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numIntro=$_POST["numIntro"];
        $result=numRomano($numIntro);
        echo "$numIntro en números romanos es: $result";
    }
    function numRomano($a){
        $romanos=["I","II","III","IV","V","VI","VII","VIII","IX","X"];
        if($a<=10 && $a>=1){
            $rom=$romanos[$a-1];
        }else{
            $rom="Número no válido";
        }
        return $rom;
    }
    ?>
    <form method="POST" action="">
        <label for="numIntro">Número a transformar:</label>
        <input type="text" id="numIntro" name="numIntro">
        <input type="submit" value="Transformar"
    </form>
</body>
</html>