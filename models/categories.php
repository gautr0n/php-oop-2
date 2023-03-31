<?php

    class categories{
        public $animal;
        public $image;

        function __construct($animal){
            if ($animal == 'gatto') {
                $this -> animal = $animal;
                $this -> image = './images/cat.png';
            } else if ($animal == 'cane'){
                $this -> animal = $animal;
                $this -> image = './images/dog.png';
            }
        }
    }
?>