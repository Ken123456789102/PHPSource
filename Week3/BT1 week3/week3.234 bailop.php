<!DOCTYPE html>
<html>
<body>
    <?php
    class Product {
        public $id;
        public $name;
        public $company;
        public $color;
        public $amount;
        public $price;

        function set_id($id){
            $this->id = $id;
        }
        function set_name($name){
            $this->name = $name;
        }
        function set_company($company){
            $this->company = $company;
        }
        function set_color($color){
            $this->color = $color;
        }
        function set_amount($amount){
            $this->amount = $amount;
        }
        function set_price($price){
            $this->price = $price;
        }

        function get_id(){
            return $this->id;
        }
        function get_name(){
            return $this->name;
        }
        function get_company(){
            return $this->company;
        }
        function get_color(){
            return $this->color;
        }
        function get_amount(){
            return $this->amount;
        }
        function get_price(){
            return $this->price;
        }
        function __construct($id, $name, $company, $color, $amount, $price) {
            $this->id = $id;
            $this->name = $name;
            $this->company = $company;
            $this->color = $color;
            $this->amount = $amount;
            $this->price = $price;
        }
    }
    ?>
</body>
</html>