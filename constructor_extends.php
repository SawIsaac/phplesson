<?php
    class Animal{
        public function __construct($animalName , $animalColor){
            $this->name = $animalName;
            $this->color = $animalColor;
        }
        public function sleep(){
            echo "Sleeping";
        }
    }

    class crow extends Animal {
        public function __construct($animalName, $animalColor){
            $this->name = $animalName;
            $this->color = $animalColor;
        }
    }

    $dog = new Animal("Woof","Orange");
    echo $dog->name;

    $crow = new crow("Gaven", "Black");
    $crow->sleep();
?>