<?php

interface Colorable{
    public function howToColor();
}


class Square implements Colorable {
      private $name;
      private $color;
      public function __construct($name, $color)
      {
          $this->name = $name;
          $this->color = $color;
      }
      public function howToColor(){
          return 'all four sides';
      }
}