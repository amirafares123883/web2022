<?php
// $arr = array ('amira','99','2');
// echo $arr[0]."<br>";

// ;

// $cars =array(
//     array('volvo',20),
//     array('Bmw',19),
//     array('land',18),

// );

// echo $cars[0][0].":in stock :".$cars[0][1].",sold:" ;
// echo $cars[1][0].":in stock :".$cars[1][1].",sold:" ;
// echo $cars[2][0].":in stock :".$cars[2][1].",sold:" ;

// $age =array("peter"=>"35","ben"=>"37");
// echo "peter is".$age["peter"]."<br>";


$array = array ('amira','wessam','fares');
sort($array);
print_r($array)."<br>";


$array = array ('amira','wessam','fares');
rsort($array);
print_r($array)."<br>";

$array = array ('amira','wessam','fares');
asort($array);
print_r($array)."<br>";

$array = array ('amira','wessam','fares');
ksort($array);
print_r($array)."<br>";
?>