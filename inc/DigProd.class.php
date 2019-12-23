<?php

    spl_autoload_register(function ($ClassName){
       include "$ClassName.class.php";
    });

    class DigProd extends BaseProd {
        public function getFinalPrice(){
            return "Total price of the Single price:" . ($this->getPrice()/2) * $this->getAmount() . "$";
        }

        public function ShowResults(){
            return  "Price of the Single product:" . $this->getPrice()/2 . "$";
        }
    }
