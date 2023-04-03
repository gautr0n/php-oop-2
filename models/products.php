<?php

    require_once __DIR__ . '/categories.php';

    class Products{
        
        use image;

        public $name;
        public $price;
        public $categories;
        public $type;
        public $description;

        function __construct($name, $price, categories $categories, $type, $description){
            $this->image = $image;
            $this->name = $name;
            $this->price = $price;
            $this->categories = $categories;
            $this->type = $type;
            $this->description = $description;
        }
    }
?>