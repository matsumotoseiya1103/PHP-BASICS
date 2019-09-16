<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
	<meta name="viewport"content="width=device-width,initial-scale=1"> 
</head>
<body>

    <h1>Type of function</h1>
    <?php
       //without argument and return type
       function greeting(){
       	 echo "Helloe PHP Function<br>";
       }
       greeting();
       echo "<br>";

       function sayHello($name){
       	echo "hello $name<br>";
       }
       sayHello("sonu");
       sayHello("vimal");
       sayHello("john");
       echo "<br>";

      //without argument and with return type //return is uues in logic
      function square(){
      	$x=5;
      	return $x*$x;
      }
      echo "Square of 5 is ".square();
      echo "<br>";

      function cube($x){
      	return $x * $x * $x;
      }
      echo "cube of 3 is:".cube(3);
      echo "<br>";

      //default argument function
      function sayHai($name="sonu"){
      	echo "Hai $name<br>";
      }

      sayHai("Rajesh");
      sayHai();
      sayHai("John");
      echo "<br>";


      //recursive function 
      function recursive1($a){
      	if($a<20){
      		echo "$a<br>";
      		recursive1($a + 2);
      	}
      }
      recursive1(10);
      echo "<br>";



      //passing array to function
      $input=[1,2,3,4,5];
      function input_array($input){
      	echo "$input[0] + $input[3] =",$input[0]+$input[3];
      }
      input_array($input);
      echo "<br>";
    ?>



    <h1>Super Globals</h1>
    <?php
       echo $_SERVER['PHP_SELF'];
       echo "<br>";
       echo $_SERVER['SERVER_NAME'];
       echo "<br>";
       echo $_SERVER['SERVER_PORT'];
       echo "<br>";
       echo $_SERVER['SERVER_SOFTWARE'];
       echo "<br>";
       echo $_SERVER['HTTP_HOST'];
       echo "<br>";
       echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
       echo "<br>";
       echo $_SERVER['HTTP_USER_AGENT'];
       echo "<br>";
       echo $_SERVER['SCRIPT_NAME'];
       echo "<br>";
       echo $_SERVER['REMOTE_ADDR'];
       echo "<br>";
       echo $_SERVER['GATEWAY_INTERFACE'];
       echo "<br>";
        echo $_SERVER['REQUEST_TIME'];
       echo "<br>";
       echo $_SERVER['SCRIPT_FILENAME'];
       echo "<br>";
       //super global-  define outside
       $x=75;
       $y=25;
       function addition(){
       	   $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
       }
       addition();
       echo $z;
       echo "<br>";
    ?>

    <a href="class5.php?subject=PHP&web=phonet.com">Test $GET</a>
    <?php
         //super globals $get
         echo "Study ".$_GET['subject']."at ".$_GET['web'];
         echo "<br>";
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    	Nmae:<input type="text" name="username">
    	<input type="submit" >
    </form>
    <?php
       if($_SERVER["REQUEST_METHOD"]=="POST"){
       	$name=$_POST['username'];
       	if(empty($name)){
       		echo "Name is empty";
       	}else{
       		echo "Hello $name";
       	}
       }

    ?>

   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
   	 <label for="file">Filename</label>
   	 <input type="file" name="file" id="file">
   	 <br>
   	 <input type="submit" >
   </form>
   <?php
      if($_FILES["file"]>0){
      	echo "You have selected a file to upload<br>";
      }else{
      	echo "PLease upload some file<br>";
      }


     //super gloabals-$_SESSION
      session_start();
      $_SESSION['W3schools']='The largest online tutorial';
      echo $_SESSION['W3schools'];
     //ENV
      echo "<pre>";
      print_r($_ENV);
      echo "</pre>";
      echo getenv('USER');

   ?>
</body>
</html>