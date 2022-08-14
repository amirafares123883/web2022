<?php
//Date
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
//Time
echo "The time is " . date("h:i:sa")."<br>";
date_default_timezone_set("Asia/Amman")."<br>";
echo "The time is " . date("h:i:sa")."<br>";
//Mkitime
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
//Strtotime
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
//Startdate
$startdate = strtotime("Monday");
$date = strtotime("+6 weeks", $startdate);

while ($startdate < $date) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);

//   $d1=strtotime("July 04");
// $d2=ceil(($d1-time())/60/60/24);
// echo "There are " . $d2 ." days until 4th of July.";
}
?>