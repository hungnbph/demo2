<?php
//tạo lớp car
abstract class Car{
    protected $name;
    protected $color;
    abstract function sound();
    public function run()
    {
        echo "<br> Ô tô chết máy";
    }
}
//tạo lớp Toyota kế thừa từ Car
class Toyota extends Car{
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function sound()
    {
        echo "<br>$this->name $this->color có tiếng kêu kẹt kẹt";
    }
}
//tạo đối tượng của lớp toyota
$lambo = new Toyota("aventado", "đỏ");
$lambo->sound();