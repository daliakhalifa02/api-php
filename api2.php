<?php
if ($_POST){
    //getting the values from input
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    // setting the equation
    $result = ($a**3 + $b*$c - $a/$b);
    //returning the result
    echo $result;
}
?>

