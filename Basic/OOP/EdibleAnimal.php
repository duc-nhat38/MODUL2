<?php

interface Edible {
    public function howtoEat();
}

abstract class Animal {
     abstract public function makeSound();
}

abstract class Fruit implements Edible {
   abstract public function howtoEat();
}
class Orange extends Fruit {
    public function howtoEat(){
         return "Bóc vỏ rồi ăn";
    }
}
class Apple extends Fruit {
    public function howtoEat(){
         return "Cắt nhỏ rồi ăn";
    }
}
class Chicken extends Animal implements Edible {
    public function howtoEat(){
        return "Làm thịt rồi ăn";
   }
   public function makeSound(){
       return "ò ó o";
   }
}
class Tiger extends Animal {
    public function makeSound(){
        return "grừu ư";
    }
}
$apple = new Apple();
echo $apple->howtoEat()."<br>";
$orange = new Orange;
echo $orange->howtoEat()."<br>";
$chicken = new Chicken;
echo $chicken->howtoEat()."<br>";
echo $chicken->makeSound()."<br>";
$tiger = new Tiger;
echo $tiger->makeSound()."<br>";