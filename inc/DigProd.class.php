<?php

    spl_autoload_register(function ($ClassName){
       include "$ClassName.class.php";
    });

    class DigProd extends BaseProd {
        public function getFinalPrice(){
            return "The TOTAL PRICE of the Digital products: " . ($this->getPrice()/2) * $this->getAmount() . "$" . "<br>";
        }

        public function ShowResults(){
            return  "The PRICE of the Single product:" . $this->getPrice()/2 . "$" . "<br>";
        }
    }
