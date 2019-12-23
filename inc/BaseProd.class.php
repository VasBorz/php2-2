<?php

    abstract class BaseProd{
        private $title;
        private $price;
        private $rate;
        private $image;

        public function setTitle($title): void{
            $this->title = $title;
        }

        public function getTitle(){
            return $this->title;
        }

        public function setPrice($price): void{
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setRate($rate): void{
            $this->rate = $rate;
        }

        public function getRate(){
            return $this->rate;
        }

        public function setImage($image): void{
            $this->image = $image;
        }

        public function getImage(){
            return $this->image;
        }


        abstract function getFinalPrice();


    }