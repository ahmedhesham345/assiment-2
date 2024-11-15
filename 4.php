<?php
$num=84;
$flag=true;
for($i = 2; $i < $num ; $i++){
    if($num%$i==0){
        $flag=false;
    }else{
        "no prime";
    }
}

if($flag){
    echo"prime";
}else{
    "no prime";
}

?>