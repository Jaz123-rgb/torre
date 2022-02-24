<?php
$n = 4;
$a ="torreA";
$b="torreB";
$c="torreC";
 
if($n == 1 ){
    echo "{$a} -> {$c} <br>";
}else{
   echo($n-1 ." ". $a ." ". $c  ." ". $b).  "\n";
   echo "{$a} -> {$c}" . "\n";
   echo(((int)$a-1) ." ". $b ." ". $a ." ". $c) . "\n";
}


?>