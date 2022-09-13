<?php
// Input 3 variables a, b,and c
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c=$_POST["c"];
// implement the equation
    $result= (pow($a,3) + ($b*$c) - ($a/$b));
// insert result into json
    $data=["result"=>$result];
    echo json_encode($data);

?>