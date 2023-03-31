<?php

    require_once __DIR__ . '/categories.php';

    class Products{
        public $name;
        public $price;
        public $categories;
        public $type;
        public $description;

        function __construct($name, $price, categories $categories, $type, $description){
            $this->name = $name;
            $this->price = $price;
            $this->categories = $categories;
            $this->type = $type;
            $this->description = $description;
        }
    }

    $croccantini = new Products('croccantini', '4.0', new categories('cane', ''), 'cibo', 'Gustosi croccantino per il tuo amico a 4 zampe');
?>