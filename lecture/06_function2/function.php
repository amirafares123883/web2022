<?php
// function writeMsg() {
//   echo "Hello world!";
// }

// writeMsg(); // call the function


// function familyName($fname, $year) {
//     echo "$fname Refsnes. Born in $year <br>";
//   }
  
//   familyName("Hege", "1975");
//   familyName("Stale", "1978");
//   familyName("Kai Jim", "1983");

  
//   function add_five(&$value) {
//     $value += 5;
//   }
  
//   $num = 2;
//   add_five($num);
//   echo $num;


// function IsPrime($n)
// {
//  for($x=2; $x<$n; $x++)
//    {
//       if($n %$x ==0)
// 	      {
// 		   return 0;
// 		  }
//     }
//   return 1;
//    }
// $a = IsPrime(3);
// if ($a==0)
// echo 'This is not a Prime Number.....'."\n";
// else
// echo 'This is a Prime Number..'."\n"."<br>";


// function addNumbers(float $a, float $b) : int {
//     return $a + $b;
//   }
//   echo addNumbers(1.2, 5.2)."<br>";

//   function factorial_of_a_number($n)
// {
//   if($n ==0)
//     {
// 	   return 1;
//     }
//   else 
//     {	
// 	   return $n * factorial_of_a_number($n-1);
//     }
// 	}
// print_r(factorial_of_a_number(3)."\n");

// function check_palindrome($string) 
// {
//   if ($string == strrev($string))
//       echo "palindrome"."<br>";
//   else
//       echo "not palindrome"."<br>";
// }
// echo check_palindrome('MeMe')."\n";
// echo check_palindrome('madam')."\n";

function reverse_string($str1)
{
 $n = strlen($str1);
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1);
   }
}
print_r(reverse_string('amira')."<br>");
print_r(reverse_string('naza')."<br>");
print_r(reverse_string('sumar')."<br>");
print_r(reverse_string('remas')."<br>");



?>