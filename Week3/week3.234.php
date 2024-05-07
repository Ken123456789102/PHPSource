<!DOCTYPE html>
<html>
<body>
  <?php
  class Fruit {
    public $name;
    public $color;
    public $weight;

    function set_name($n){
        $this->name = $n;
    }
    protected function set_color($n){
        $this->color = $n;
    }
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
      // Consider outputting information here (optional)
      // echo "A new Fruit object created: {$this->name} ({$this->color})";
    }
                function __destruct(){
                    echo"The fruit is {$this->name} and the color is {$this->color}";
                }
            }
            $apple = new Fruit("Apple","red");
        ?>
    </body>
</html>