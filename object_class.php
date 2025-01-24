<?php

    class car{
        // public,private,protected

        private $name;
        public $price;

        function get_car_name($name = "default name") //type function (return)
        {
            $this->name= $name;
            return $this->name;
        }
        function get_car_price($price = "default price") //void function
        {
            $this->price= $price;
            echo $this->price;
        }

    }
  
    $result = new car();

    
    // $result->get_car_price();
    $name = $result->get_car_name("BMW");
    echo $name;

?>