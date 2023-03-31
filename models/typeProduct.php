<?php

require_once __DIR__ . '/products.php';

    class ball extends products {
        
        public $material;

        function __construct($image, $name, $price, categories $categories, $type, $description, $material){
            $this->image = $image;
            $this->name = $name;
            $this->price = $price;
            $this->categories = $categories;
            $this->type = $type;
            $this->description = $description;
            $this->material = $material;
        }
    }

    $ball = new ball('./images/ball.jpeg', 'Palla', '4.50', new categories('cane', ''), 'gioco', 'Una palla super morbida con il qulae il tuo cane potragiocare ovunque, facile da pulire è ottima per i cani dai 6 mesi in su.', 'gomma');

?>