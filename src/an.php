<?php
/**
 * Alpha numeric
 * Change text so that only a human can read
 * 
 * Ex:
 * ROBINSON
 * R081N50N
 * 
 * Author: Robinson Coello [robincoello@hotmail.com]
 * Date: 11 05 2016 | dd mm yyyy
 * Web: http://robincoello.github.io/an/
 * Source: github :  https://github.com/robincoello/an 
 * 
 * 
 */

// cojemos la palabra o frase y por cada letra buscamos su remplazo 

$text = "WASHO WARAGUA WHAT"; 
$b = "W";
$r = ['0','1','2','3','4','5','6','7','8','9','!','#','$','%','&','(',')','*','+','-','/','[','\\',']','^','_'];
echo "$text<br><br>"; 
for ($i=0; $i<count($r); $i++) {
    $anTexto = str_replace($b,$r[$i],$text);
    echo "$anTexto<br>"; 
    
}

echo $anTexto; 


