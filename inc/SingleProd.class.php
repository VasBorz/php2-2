<?php

    spl_autoload_register(function ($ClassName){
        include "$ClassName.class.php";
    });

    class SingleProd extends BaseProd{

        public function getFinalPrice(){
            return "The TOTAL PRICE of the Single products: " . $this->getPrice() * $this->getAmount() . "$" . "<br>";
        }

        public function ShowResults(){
            return  "The PRICE of the Single product: " . $this->getPrice() . "$" . "<br>";
        }
    }