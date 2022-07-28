 <?php

function MyTest(){
    $z=5; // local scope
 echo "<p> variable x inside function is:$z </p>";
}
MyTest();



?>

<?php
//global
$x=2;
$y=10;

function MyTest1(){
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}
MyTest1();
echo $y;
?>

<?php
$x=4;
$y=10;

function MyTest2(){
    global $x,$y;
    $y=$x+$y;
}
MyTest2();
echo $y;

?> -->