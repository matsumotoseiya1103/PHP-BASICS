<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport"content="width=device-width,initial-scale=1"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=“anonymous”>



</head>
<body>
    <h1 class="text-center">ARRAY -SORTING/SEARCHING/INSERT/DELETE</h1>
    <?php
       //sorting array
       $fruits=["apple","mago","banana","grape"];
       $numbers=[7.6,4,8,2];
       sort($fruits);
       foreach ($fruits as$fluit) {
       	 echo "$fluit ";
       	 
       }
       echo "<hr>";
       sort($numbers);
       foreach ($numbers as $number) {
       	 echo "$number ";
       	 
       }
       echo "<hr>";
       rsort($fruits);
       foreach ($fruits as  $fluit) {
       	 echo "$fluit ";
       	 
       }
       echo "<hr>";
       rsort($numbers);
       foreach ($numbers as$number) {
       	 echo "$number "; 
       }
       echo "<hr>";

      //associative array
      
      $age=['peter'=>40, 'ben'=>37,'joe'=>29];
      asort($age);
      echo "<pre>";
      print_r($age);
      echo "</pre>";

      echo "<hr>";
      arsort($age);
      echo "<pre>";
      print_r($age);
      echo "</pre>";
      
      ksort($age);
      echo "<pre>";
      print_r($age);
      echo "</pre>";
      echo "<hr>";
      krsort($age);
      echo "<pre>";
      print_r($age);
      echo "</pre>";

       echo "<h1>searching array</h1>";

      $a= array("a"=>"red","b"=>"green","c"=>"blue");
      echo array_search("red", $a);
      echo "<hr>";


      $a= array("a"=>"5","b"=>5,"c"=>"5");
      echo array_search(5, $a,true);
      echo "<hr>";


      //inserting elements to the array検索する値が配列に複数ある場合は、最初の値のインデックスキーのみが返されます。
      $fruits[4]="grape";
      echo "<pre>";
      print_r($fruits);
      echo "</pr>";
      echo "<br>";



      $colors=array('red','green');
      array_push($colors,'black','green');
      echo "<pre>";
      print_r($colors);
      echo "</pre>";

    //delete elements
      $color=array('red','green','blue');
      array_pop($color);
      echo "<pre>";
      print_r($color);
      echo "</pre>";

      //object oriented programing concept
    ?>
     <!-- object oriented programing concept -->
    <h1 class="text-center">Object Oriented Programing</h1>
    <h3>Class</h3>
    <h3>Inhertiance</h3>
    <h3>Polymorphism</h3>
    <h3>Encapsulation</h3>
    <h3>Abstraction</h3>
    

    <?php
       class Books{
       	//preperties
       	var $title;
       	var $price;
      
       //member function getPrice
       	//getter and setter
       public function getPrice(){
       	echo $this->price."<br>" ;
       }

       public function getTitle(){
       	echo  $this->title."<br>" ;
       }

       public function setPrice($price){
       	 $this->price=$price ;
       }
       public function setTitle($title){
        $this->title=$title ;
       }
}
      //creating objects
       $physics= new Books();
       $chemistry=new Books();
       $math=new Books();


       $physics->setTitle("physics for High School");
       $physics->setPrice(100);

       $chemistry->setTitle("Molecular");
       $chemistry->setPrice(150);

       $math->setTitle("Algebra");
       $math->setPrice(200);

       $physics->getTitle();
       $physics->getPrice();
       

       $chemistry->getTitle();
       $chemistry->getPrice();


       $math->getTitle();
       $math->getPrice();


   
      class Candy{
      	var $title;
      	var $name;

        public function getTitle(){
      	echo $this->title."<br>";
      	}
      	public function getName(){
      	echo $this->name."<br>";
      	}
      	public function setTitle($title){
        echo $this->title."<br>";
      	}
      	public function setName($name){
        echo $this->name."<br>";
      	}
      	
      }

      $chemistry=new Candy();
      $math=new Candy();
      $physics=new Candy();

      $chemistry->setTitle("chemistry");
      $chemistry->setName(200);
      
      
       $chemistry->getTitle();
       $chemistry->getName();
      

    ?>

    <?php
       class Robot{
       	var $name;
       	public function setName($name){
       		$this->name=$name;
       	}
       	public function getName(){
       		echo $this->name;
       	}
       }
       $a=new Robot;
       $a->setName('ロボ太郎');
       echo $a->getName();
       $b=new Robot;
       $b->setName('ロボ二郎');
       echo $b->getName();


      class Tomato{
      	public $name;
      	public function __construct($name){
      		$this->name=$name;
      	}
      	
      	public function getName(){
      	  echo	$this->name;
      	}
      	
      }

	$a=new Tomato('aiueo');
      	echo $a->getName();













    ?>







</body>
</html>