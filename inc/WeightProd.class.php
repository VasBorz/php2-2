<?php
    spl_autoload_register(function ($class_name){
        include "$class_name.class.php";
    });

    class WeightProd extends BaseProd{

        public function getFinalPrice(){
            return "Total price of the Single price:" . $this->getPrice() * $this->getAmount();
        }

        public function ShowResults(){
            return  "Price of the Single product:" . $this->getPrice()/2 . "$";
        }

    }