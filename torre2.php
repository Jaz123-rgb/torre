<?php
$n = 1;
$a ="A";
$b="B";
$c="C";
 
if($n == 1 ){
    echo "{$a} -> {$c} <br>";
}else{
   echo($n-1 ." ". $a ." ". $c  ." ". $b).  "<br>";
   echo "{$a} -> {$c} <br>";
   echo(((int)$a-1) ." ". $b ." ". $a ." ". $c);
}


?>