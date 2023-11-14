<?php
  
$texto="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas tempor lacus, eu ornare erat aliquet at. Nulla arcu lectus, bibendum non arcu vel, fermentum mollis felis. Nam eget imperdiet justo, at tristique leo. Donec luctus lacinia dolor et suscipit. Aliquam felis nunc, fringilla ac metus in, tincidunt vulputate erat. Suspendisse euismod hendrerit nisl. Morbi consequat est id erat porttitor, ut posuere massa condimentum. Morbi vitae nisi id magna tincidunt condimentum nec vel metus. Sed ac dignissim neque. Nam nunc tellus, malesuada sit amet nulla sed, scelerisque ullamcorper libero. Sed venenatis eu urna ut auctor. Fusce sollicitudin id nulla luctus varius.\nUt tincidunt justo sem, et vehicula diam feugiat eu.Quisque quis velit ex.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Ut erat mauris, condimentum a nulla et, iaculis elementum nisl.Mauris justo dui, sollicitudin sed lacus in, rhoncus volutpat mauris.Duis commodo, erat ac feugiat egestas, neque elit auctor nunc, quis varius eros dolor eu neque.Aliquam erat volutpat.Nunc facilisis, libero eu feugiat gravida, lorem neque gravida diam, nec gravida lacus nulla et ex.Integer at consequat diam.Suspendisse potenti.Nam sed nisi ultrices, consequat ante vehicula, posuere felis.Morbi vitae diam tempus, egestas neque vitae, maximus risus.Etiam id tempus libero.Etiam urna dui, vestibulum sit amet eleifend id, lacinia vitae mi.Aenean in nisi venenatis enim malesuada efficitur.\nNam non eleifend erat, vel tempor purus.Quisque consectetur, tellus id tincidunt consectetur, augue quam vehicula tortor, et laoreet quam magna sit amet risus.Proin sollicitudin sagittis nibh, at aliquam lorem rutrum sed.Morbi tellus magna, suscipit eget sapien ut, varius tempor velit.Etiam eu iaculis velit.Ut a rhoncus nisl.Quisque ut condimentum est.Phasellus auctor mauris vitae nisl vestibulum, in lacinia erat tincidunt.Vestibulum sit amet mi vitae purus eleifend sagittis in ac mi.Sed in mi facilisis, interdum eros non, tristique neque.Donec finibus pellentesque velit.Donec sed lorem eget nisl aliquam suscipit.Nunc fermentum, sapien a bibendum vehicula, mi nisl scelerisque lectus, ac euismod mi augue nec arcu.Praesent laoreet diam sit amet sodales efficitur.\nPhasellus nec felis sollicitudin, pulvinar risus non, euismod neque.Aenean ultricies rhoncus neque, sed tempor quam consequat vel.Donec finibus, eros sed tincidunt varius, eros magna ornare lectus, quis consequat ex nulla et lacus.Suspendisse vitae enim eget felis faucibus vestibulum.Maecenas a ligula massa.Integer nec scelerisque odio.Etiam vel aliquam neque, sit amet semper lectus.\nVestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis iaculis leo vel pharetra ornare.Vestibulum mi nunc, sollicitudin iaculis vulputate in, egestas a orci.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.Cras sit amet gravida risus.Vivamus dignissim dapibus metus, in convallis eros.Phasellus id purus tellus.Vestibulum rutrum libero sapien, non gravida odio varius sit amet.Curabitur tristique velit eu laoreet aliquam.Phasellus vel justo felis.";
$text2=str_replace([" ", "\n","\r"],"", $texto);
echo "$texto <br>";
$numCaracteres=strlen($text2);
echo "Número de carácteres: $numCaracteres <br>";
$numPalabras=str_word_count($texto);
echo "Número de palabras: $numPalabras <br>";
$text3=str_replace(["\n", "\r"],"",$texto);
$frases=explode(".",$text3);
$numFrases=count($frases);
echo "Número de frases: $numFrases <br>";
$text4=str_replace("\n","",$texto);
$parrafos=explode(".",$text4);
$numParrafos=count($parrafos);
echo "Número de párrafos: $numParrafos <br>";
$letPalabra=$numCaracteres/$numPalabras;
echo "Promedio de letras por palabra: $letPalabra <br>";
$palabrasFrase=$numPalabras/$numFrases;
echo "Promedio de palabras por frase: $palabrasFrase <br>";
$frasesParrafo=$numFrases/$numParrafos;
echo "Promedio de frases por párrafo: $frasesParrafo<br>";
$texto5=strtolower(str_replace(" ","",$texto));
$frecCaracter=count_chars($texto5,1);
$moda=chr(array_search(max($frecCaracter),$frecCaracter));
echo "La letra de moda es: $moda<br>";
$texto6=strtolower($texto);
$palabras=str_word_count($texto6,1);
$frecPalabras=array_count_values($palabras);
$palabraModa=array_search(max($frecPalabras),$frecPalabras);
echo "La palabra de moda es: $palabraModa";
   
    
    ?>