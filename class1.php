<?php
//echo statement faster than print not return
  echo " <h1>Hellow world</h1><br>";
  echo "I am about to learn PHP!<br>";
  echo "This ","string ","was ","made ","with mulutiple parameters<br>";
  echo "escapeing character is done \"like this\"<br>";
  echo  "This ". "string ". "was ". "made","1". "<br>";

  //print function return
  print"Hellow World";
  print"<h2>Welcome to PHP</h2>";


  //variable-temporary strage untill the program execution
  $name="PHP";
  echo "Welcome to $name<br>";
  echo "Welcome to ".$name."<br>";

  $x=10;
  $y=20;
  echo $x + $y."<br>";
  //datatypes
  $txt="PHP WORLD";//string datatype
  $var1="a676";
  $var2="678";
  $x=5;//integer datatype(int)
  $y=10.5;//float datatype(float)
  $z=+125987.66;//float datatype(float)
  echo "Welcome to $txt<br>";
  echo "I live at ".$txt."!<br>";
  echo $x + $y."<hr>";

//var_dump is used to find the datatype of variable
  echo var_dump($txt)."<br>";
  echo var_dump($var1)."<br>";
  echo var_dump($var2)."<br>";
  echo var_dump($x)."<br>";
  echo var_dump($y)."<br>";
  echo var_dump($z)."<br>";
  echo var_dump($x,$y,$z)."<br>"."<br>"."<br>";
 //array can store multiple types of values
  //old
  $array_name=array(99,'w3resource',76899.99);
  //late
  $array2=[100,'phpworld',89.99]; 
  echo var_dump($array_name)."<br>";
  echo print_r($array_name)."<br>";
  echo "<pre>";
  echo print_r($array2);
  echo "</pre>";
  //echo is for only one 
  echo $array2[2]."<br>";
  echo "<hr>";
//boolean  datatype
  $x=true;
  $y=false;
  var_dump($x);
  echo "<br>";
  var_dump($y);
  echo "<br>";

  //isset  function is used to check wether a variable is set or not(empty or available)
  $var1='test';
  $var2=null;
  echo var_dump(isset($var1));
  echo var_dump(isset($var2));
 
  echo "<hr>";
//string functions
 echo strlen("Hello World!");//count number of characters in string
  echo "<br>"; 

  echo str_word_count("Hellow World");//count number of words in string
  echo "<br>";
// find the reverse 
  echo strrev("hellow world!");
  echo "<br>";

  echo substr("Hello World" ,6);//find position
  echo "<br>";

  echo strtolower("Hellow World");//converts the string
  echo "<br>";

  echo strtoupper("hello world");//converts the string to 
  echo "<br>";

  echo str_replace("world","php","hello world"); //replace(world )
  echo "<br>";

  echo str_ireplace("world","php","hello world");//replace(case-insensitive)
  echo "<br>";


 $array=str_split("hello world");
 //split the string
 echo "";
 echo "<pre>";
 print_r($array);
 echo "</pre>";
//constants -fixed value

  define("PI",3.14);
  echo PI;
  echo "<br>";

  define("GREETINGS","Welcome to PHP",true);
  echo greetings;
  echo "<br>";

  //PHP-CONSTANTS


echo "This is the line number".__line__."of the file".__FILE__."<br>";
echo "<br>";
echo __line__."<br>".__FILE__;








?>
