<!DOCTYPE html>
<html>
<head lang="en">
	<title>PHP BASIC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="widt=dexice-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>
</head>
<body>
    <h1 class="text-center">OPERATORS</h1>
    <?php
      $x=10;
      $y=6;
      //arithmetic operator
      echo "addition :",$x+$y."<br>";
      echo "subttraction :",$x-$y."<br>";
      echo "multiplication",$x*$y."<br>";
      echo "devision",$x/$y."<br>";
      echo "modulus",$x%$y."<br>";
      echo "exponentation",$x**$y."<br>";//exponentation(10 to the power of 6)
     

     //assignment operator
      $x=12;
      echo $x."<br>";
      
      $x+=10;
      echo $x."<br>";

      $x-=10;
      echo $x."<br>";

      $x*=10;
      echo $x."<br>";

      $x/=10;
      echo $x."<br>";

      $x%=10;
      echo $x."<br>";

     //comparision
      $x=100;
      $y="100";
      echo __line__."<br>".__file__."<br>";



      var_dump($x==$y);  //return true because value are equal
      echo "<br>";

      var_dump($x===$y);  //return false because datatype are not equal
      echo "<br>";

      var_dump($x!=$y);//returns false because values are 
      echo "<br>";

      var_dump($x!==$y);//returns true because datatype are 
      echo "<br>";


      var_dump($x>$y);
      echo "<br>";

      var_dump($x<$y);
      echo "<br><br>";

      var_dump($x>=$y);
      echo "<br>";

      var_dump($x<=$y);
      echo "<br>";


      //increment and decrement oparator


      $x=10;
      //pre-increment
      echo ++$x."<br>";//$x=$x+1
      //post-increment
      echo $x++."<br>";//$x=11, $x=$x+1,$x=12

      //pre-decrement
      echo --$x."<br>";//$-1=11
      //post-decrement
      echo $x--."<br>";
      echo $x ."<br>";



      $y=100;
      echo $y++."<br>";

      echo --$y."<br>";

      echo ++$y."<br>";

      echo $y--."<br>";



      //logical operator
      $x=100;
      $y=50;


      var_dump($x==100 && $y==50);
      echo "<br>";//both are true
      var_dump($x==100 || $y==50);
      echo "<br>";//both are equal
      var_dump($x!=90);
      echo "<br>";
      var_dump($x==100 and $y==50);
      echo "<br>";
      var_dump($x==100 or $y==50);
      echo "<br>";
      var_dump($x==100 xor $y==50);// x is nagative ,either should be faluse
      echo "<br>";
      var_dump($x==100 xor $y==40);//x is nagative ,either should be faluse
      echo "<br>";


      //string operator
      $txt1="Hello ";
      $txt2="PHP!";

      //concatenation operator
      echo $txt1.$txt2."<br>";
      $txt1.=$txt2;    //$txt1=$txt.$txt2
      echo $txt1."<br>";


      //ternary operator
      $fuel=1;
      echo $fuel<=1 ? "Fill tank now" :"there is enogh fuel";
      echo "<br>";
      echo $fuel<1 ? "Fill tank now" :"there is enogh fuel";

    ?>
    <h1 class="text-center">Conditional Construct</h1>
    <?php
        $a=10;
        $b=5;

        if($a>$b)
        	echo "a is greater than b<br>";
        //swapping
        if($a>$b)
        	echo $a."is greater than ".$b."<br>";
        	$c=$a;
        	$a=$b;
        	$b=$c;
        	echo 'a='.$a.',b='.$b;
        	echo "<br>";
        
        //07 24-hours format



        echo date("H")."<br>";
        echo date("G")."<br>";//1 to 24
        echo date("F")."<br>";//FUl spell
        echo date("M")."<br>";//month
        echo date("Y")."<br>";//year
        echo date("D")."<br>";//friday
        echo date("j")."<br>";//date

        $t=date("H");
        //if statement
        if($t<20)
        	echo "Have a good day!";
            echo "<br>";
        //if-else statement
        if($t<"20")
        	echo "Have a good day!";
        else
        	echo "Have a good night!";
        echo "<br>";


        //if-else-if statement
         if($t<"10")
          echo "Have a good morning!";
        elseif($t<"20")
          echo "Have a good day!";
        else
          echo "Have a good night!";
        echo "<br>";


        if($a>$b):
            echo $a." is greater than ".$b;
        elseif($a==$b):
        	echo $a." equal ".$b;
         else:
         	echo $a." is neither grater than or equal to ".$b;
        endif;
        echo "<br>";


        //swith conditional construct
        $page ="Home";
        switch($page){
        	case "Home";
        	  echo "You selected Home";
        	  break;
        	case "about";
        	  echo "You selected about";
        	  break;
        	case "news";
        	  echo "You selected news";
        	  break;
        	case "login";
        	  echo "You selected login";
        	  break;
            default:
            echo "no match";
        }
       echo "<br>";


     $a=date("D");
       switch($a) {
        	case "Sun";
        	  echo "Sunday";
        	  break;
        	case "Tue";
        	  echo "Tuseday";
        	  break;
        	case "Wed";
        	  echo "Wednesday";
        	  break;
        	case "Thr";
        	  echo "Thirthday";
        	  break;
        	 case "Fri";
        	  echo "Friday";
        	  break;
            default:
              echo "holiday";
        }
       echo "<br>";


    $b=1919;
    		if($b>2000){
          echo "new generation";
          }elseif($b<1900){
            echo "old generation";
          }else{
            echo "nutral";
          }
    	
    ?>





</body>
</html>