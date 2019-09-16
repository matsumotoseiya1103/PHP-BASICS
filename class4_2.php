 
 <?php

class Books{
        //preperties
        var $title;
        protected  $price;
        private $daiary;
       //constructor
        public function __construct($title, $price){
          echo "Initialization Object";
          $this->title=$title;
          $this->price=$price;
        }

        //member function getPrice
        //getter and setter
       public function getPrice(){
        echo $this->price."<br>" ;
       }

       public function getTitle(){
        echo  $this->title."<br>" ;
       }

      /* public function setPrice($price){
         $this->price=$price ;
       }
       public function setTitle($title){
        $this->title=$title ;
       }*/
      
      //polymorphism-overloading
       public function add($x){
        $x=$x+1;
        echo $x;
       }
}
      echo "<hr>";

      //creating objects constructor is calleds

       $physics= new Books("physics for High School",100);
       $chemistry=new Books("Molecular",150);
       $math=new Books("Algebra",200);
       //cannot acess private/protected property
     

     /* $physics->setTitle("physics for High School");
       $physics->setPrice(100);

       $chemistry->setTitle("Molecular");
       $chemistry->setPrice(150);

       $math->setTitle("Algebra");
       $math->setPrice(200);

       $physics->getTitle();
       $physics->getPrice();*/

       

       $chemistry->getTitle();
       $chemistry->getPrice();


       $math->getTitle();
       $math->getPrice();

 class Comicbook extends Books{
  var $booktype;
  public function setType($type){
    $this->booktype=$type;
  }
  public function getType(){
    //child class can access the protected propaty
    echo $this->price."".$this->booktype;
  }
  //polymorphism
  public function add($x){
    $x=$x+2;
    echo $x;
 }
 //polymorphism
 public function area($x,$y){
    echo $x*$y;
 }

 //public function area($x,$y,$z){
   // echo $x*$y*$z;
 }


    $comic=new Comicbook("Will Eisner",100);

   /* $comic->setTitle("Will Eisner");
     $comic->setPrice(100);*/
     $comic->setType("Comic Book");

     $comic->getTitle();
     $comic->getPrice();
     $comic->getType();
     
    //child class cannot access the property of the parents class
     echo $comic->diary;
     echo $comic->title;
     
   //Function add is overhidden
    $comic->add(5);
    echo "<hr>";
     ?>
     <p>How to submit form</p>
     <form action="class4_2.php" method="get">
       <input type="text" name="comment"><br>
       <input type="submit" value="submit">
     </form>
<?php
  if(isset($_GET['comment']))
  {
  $comment=$_GET['comment'];
  echo $comment;
  }
?>










