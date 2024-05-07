<!DOCTYPE html>
<?php
// bai abstract
abstract class Week3chieu{
    abstract protected function prefixName($name);
}
class ChildClass extends Week3chieu {
    public function prefixName($name){
        if ($name == "Jonh Dick")
        {
            $prefix="Mr.";
        } elseif ($name == "Jane Pussy"){
            $prefix= "Mrs.";
        } else {
            $prefix= "Doug";
        }
        return "{$prefix} {$name}";
    }
}
$class=new ChildClass();
echo $class->prefixName("Jonh Dick");
echo "<br>";
echo $class->prefixName("Jane Pussy");
echo"<br>";
echo $class->prefixName("Wtf");
?>


