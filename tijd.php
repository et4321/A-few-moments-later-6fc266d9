<?php

echo"Voorbeeld voor het invullen: 10d 10u 10m 10s".PHP_EOL;
echo"vul je tijd in:".PHP_EOL;
$tijd = readline();
$alletijden = explode(" ",$tijd);

$alles = 0;
$d = 0;
$u = 0;
$m = 0;
$s = 0;


foreach ($alletijden as $tijdenint){
    $tijdenintalles = substr($tijdenint, -1);  


switch ($tijdenintalles) {

    case "d";
    $d = (int)$tijdenint*24*120;
break;

    case "u";
    $u = (int)$tijdenint * 120 ;
break;

    case "m";
    $m = (int)$tijdenint * 60 ;
break;

    case "s";
    $s = (int)$tijdenint;
break;
}}

$alles = $s+$m+$u+$d;
echo"$alles seconde";



