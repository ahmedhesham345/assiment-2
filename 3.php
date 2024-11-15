<?php

$N=[10,5,6,20,50];
$max=$N[0];

foreach ($N as $value){
    if($max < $value){
        $max=$value;
    }
}
echo"max num is".$max;
echo"<br>.<br>.<br>";



$N2=[20,30,50,13,10,2,3,6,8];
foreach ($N2 as $value){
    if($value%2==0)
    
    
    echo $value." ";
}
?>