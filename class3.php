<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport"content="width=device-width,initial-scale=1"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>
    
</head>
<body>
   <h1 class="text-center">LOGIN CONSTRUCT</h1>


   <?php

      //for loop - initialization; test-condition; increament/decreament
      for($x=1; $x<10; $x++){
      	echo "The number is $x <br>";
      }
      echo "<hr>";
      for($count=1; $count<=12; ++$count){
      	echo "$count time 12 is ".$count*12;
      	echo "<br>";
      }
      echo "<hr>";
      
      $x=1;

      while($x<=5){
      	echo "The number is $x <br>";
      	$x++;
      }
      echo "<hr>";

      $fuel=10;
      while($fuel>0){
      	echo "There is enough fuel<br>";
      	$fuel--;
      }
      echo"<hr>";
      //do-while-exit-controlled loop
      $x=1; //initialization
      do{
      	echo "The nuber is $x<br>";//first doesnot check condition
      	$x++;
      }while($x<=5);
           echo "<hr>";

           
           $x=6;
     do{
     	echo "The number is $x <br>";
     	$x++;
     }while($x<=5);
     echo "<hr>";

     //array -indexed array //associative array
     //simple indexed array
     $cars=array("Volvo","Benz","BMW");
        echo "I like ".$cars[0].",".$cars[1]." and ".$cars[2]."<br>";
     
     //loop through the indexed array
        $cars=["Volvo","Benz","BMW"];
        for($x=0; $x<count($cars); $x++){
        	echo "I like ".$cars[$x];
        	echo "<br>";
        }
        print_r($cars);
        echo "<br>";

        //foreach
        $x=0;
        foreach ($cars as $car) {
        	echo $cars[$x];
        	echo "<br>";
        	$x++;
        }
      echo "<hr>";

      foreach($cars as $car){
      	echo $car."<br>";
      }
    

      $colors=["red","green","blue"];
      print_r($colors);
      echo "<br>";
      foreach($colors as $color){
      	echo $color."<br>";
      }


      //associative array  have kee
      $age=['peter'=>32,'Ben'=>37,'Joe'=>43];
      echo "Peter is ".$age['peter'] ." years old.";
      echo "<br>";
      echo "Joe is ".$age['Joe'] ." years old.";
    


        foreach($age as $name=>$age){
        	echo "Name: ".$name."Age: ".$age;
        	echo "<br>";
        }

      $paper=array(
           "Copier"=>"Copier $ Multipurpose",
           "Inkjet"=>"Injet Printer",
           "Laser"=>"Laser Printer",
           "Photo"=>"Photographic Paper"
      );

      //print inkjet
     echo "Print Inkjet :".$paper['Inkjet']."<hr>";



      //foreach
     foreach ($paper as $key => $value) {
     	    echo "Name: ".$key."Age: ".$value;
        	echo "<br>";
     }



    //Loop control statments :break
     $i=0;
      while (++$i) {
      	  switch ($i) {
      	  	case 5:
      	  		echo "At 5 <br>";
      	  		break 1;  //break 1   exit from switch
      	  	case 10:
      	  		echo "At 10 <br>";
      	  		break 2;  //break 2   exit from "while loop"
      	  	default: 		
      	  		break;  //break decide
      	  }
      }


     //Loop control statments : continue
      $j=5;
      while($j>-1){
      	$j--;
      	echo "$j <br>";


      	if($j==0){
      		continue;
      		echo(10/$j)."<br>";
      	}
      }



      //Multidimensional Array
      $cars= array (
      	     array("Volve",22,18),
      	     array("BMW",15,13),
      	     array("Saab",50,20),
      	     array("Audi",17,15),

      );


          echo $cars[0][0].": In Stock :".$cars[0][1].".Sold out :".$cars[0][2]."<br>";
          echo $cars[1][0].": In Stock :".$cars[1][1].".Sold out :".$cars[1][2]."<br>";
          echo $cars[2][0].": In Stock :".$cars[2][1].".Sold out :".$cars[2][2]."<br>";
          echo $cars[3][0].": In Stock :".$cars[3][1].".Sold out :".$cars[3][2]."<br>";


// Nested for loop
      for($row=0; $row<4; $row++){
      	echo "<b>Row number: $row</b>";
      	echo "<ul>";
      	for($col=0; $col<3; $col++){
      		echo "<li>".$cars[$row][$col]."</li>";
      	}
      	echo "</ul>";
      }


      $color=array(
           ['red',15],
           ['green',10],
           ['blue',20],

      );
      for($row=0; $row<3; $row++){
      	for($col=0; $col<2; $col++){
      		echo $color[$row][$col]." ";
      	}
      	echo "<br>";
      }

   ?>
</body>
</html>