<?php

    spl_autoload_register(function ($ClassName){
        include "$ClassName.class.php";
    });

    class SingleProd extends BaseProd{

        public function __construct($price, $amount)
        {
            parent::__construct($price, $amount);
            $this->getFinalPrice();
            $this->ShowResults();
        }

        public function getFinalPrice(){
            return "Total price of the Single price:" . $this->getPrice() * $this->getAmount();
        }

        public function ShowResults(){
            return  "Price of the Single product:" . $this->getPrice()/2 . "$";
        }
    }