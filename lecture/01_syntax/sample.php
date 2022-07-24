<!-- <?php
//echo "Hello Word!";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> Hello Word 1 </h1> 
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        //  echo "Hello Word!";
        ?>
    </h1>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
      // $color = "blue";
       //echo "My car is"  . $color . "<br>"; 

       
   ?>
</body>
</html> -->
<?php
 //$float_var=2.5;
 //$int_var=intval($float_var); //تحويل من float الى int
 //$str_var=strval($float_var); 

 //var_dump($int_var);
 //var_dump($str_var);

 //$str="Hello";
 //$float=floatval($str);
 //var_dump($float);

 echo strlen("Hello world!").'<br>';
 echo str_word_count("Hello world!").'<br>';
 echo strrev("Hello world!").'<br>';
 echo str_replace("world","Dolly","Hello world!").'<br>';
 echo substr("Hello world!",4.7).'<br>';
 $str="Hello world!,hh".'<br>';
 echo substr($str,0,strpos("$str",'!')+1);

//concatination

 ?>
