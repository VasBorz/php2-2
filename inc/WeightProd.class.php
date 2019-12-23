<?php
    spl_autoload_register(function ($class_name){
        include "$class_name.class.php";
    });

    class WeightProd extends BaseProd{

        public function getFinalPrice(){
            return "The TOTAL PRICE of the Single products: " . ($this->getPrice() * 0.1) * $this->getAmount() . "$" . "<br>";
        }

        public function ShowResults(){
            return  "The PRICE of the Single product: " . $this->getPrice() * 0.1 . "$" . "<br>";
        }


    }