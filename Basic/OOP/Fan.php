<?php
class Fan {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST  = 3;
    
    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = 'blue';
    }
    public function get_speed(){
        return $this->speed;
    }
    public function set_speed($speed){
         $this->speed = $speed;
    }
    public function get_on(){
        return $this->on;
    }
    public function set_on($on){
         $this->on = $on;
    }
    public function get_radius(){
        return $this->radius;
    }
    public function set_radius($radius){
         $this->radius = $radius;
    }
    public function get_color(){
        return $this->color;
    }
    public function set_color($color){
         $this->color = $color;
    }
    public function  toString() {
        if ($this->get_on() === true) {
            return "Speed :" .$this->get_speed()."<br>"."Radius : ".$this->get_radius()."<br>"."Color : ".$this->get_color()."<br>"."fan is on";
        }else {
            return "Radius : ".$this->get_radius()."<br>"."Color : ".$this->get_color()."<br>"."fan is off";
        }
    }
}
$fan1 = new Fan();
$fan1->set_speed($fan1::FAST);
$fan1->set_radius(10);
$fan1->set_color('yellow');
$fan1->set_on(true);
echo $fan1->toString();
echo "<br>";
$fan2 = new Fan();
$fan2->set_speed($fan2::FAST);
$fan2->set_radius(5);
$fan2->set_color('blue');
$fan2->set_on(false);
echo $fan2->toString();
?>