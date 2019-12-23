<?php

   //а) Есть абстрактный товар.
    abstract class BaseProd{
        private $title;
        private $price;
        private $rate;
        private $image;
        private $amount;

        // Set and Get Title
        public function setTitle($title): void{
            $this->title = $title;
        }

        public function getTitle(){
            return $this->title;
        }

        // Set and Get Price
        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }

        // Set and Get Rate
        public function setRate($rate): void{
            $this->rate = $rate;
        }

        public function getRate(){
            return $this->rate;
        }

        // Set and Get Image
        public function setImage($image): void{
            $this->image = $image;
        }

        public function getImage(){
            return $this->image;
        }

        //Set and Get Amount

        public function setAmount($amount){
            $this->amount = $amount;
        }

        public function getAmount(){
            return $this->amount;
        }

        //Abstract Method
        abstract public function getFinalPrice();
        abstract public function ShowResults();

    }