<?php
//for loop
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>

<?php
$arr=["element 1","element 2","element 3","element 4","element 5"];
for ($i=0; $i <count($arr) ; $i++) { 
    echo $arr[$i]."<br>";
}
 ?>

<?php
//foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>

<?php
// while loop
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>

<?php
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
?>

<?php
// do while
$x = 8;

do {
  echo "The number is: $x <br>";
  $x--;
} while ($x <= 5);
?>

<?php
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

<?php
// break
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>