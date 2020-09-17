<?php
class Animal{
    private $color;
    private $weight;
    public function __construct($color, $weight){
        $this->color = $color;
        $this->weight = $weight;
    }
    public function getColor(){
        return $this->color;
                
    }
    public function sound(){
        echo "Động vật kêu theo tiếng của ló <br>";
    }
  //Phương thức con chó kế thừa từ Animal
 
} 
class Dog extends Animal{
    private $name; 
    public function setName($name){
        $this->name= $name ;
    }
    public function run(){
          echo "$this->name có màu "  . $this->getColor().   " đang chạy";
     
    }
    public function sound(){
        echo "Con chó kêu gâu gâu <br> ";
    }
  }
  //lớp con mèo kế thừa từ animal
  class Cat extends Animal{
      public function sound(){
          echo "Con mèo kêu meo  <br>";
      }
  }
  //khởi tạo đối tượng 
  $dog = new Dog("đỏ", "15 kí");
  $dog->setName('Cậu vàng ');
  $dog->run();
  $dog->sound();
//Tạo đối tượng cat
$cat = new Cat('kitty', 'hồng');
$cat->sound();