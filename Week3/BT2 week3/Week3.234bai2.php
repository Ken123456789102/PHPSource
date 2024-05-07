<!DOCTYPE html>
<?php
class Fruit {
    public $name;
    public $color;
    public function _construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function intro(){
        echo"This fruit name is {$this->name} and have color of {$this->color}.<br>";
    }
}
class Strawberry extends Fruit{
    public function message(){
        echo "AM I a fruit or a berry?";
    }
}
$strawberry=new Strawberry("strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>