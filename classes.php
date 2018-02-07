<?php
abstract class Inhabitant{
    
    function draw(){

    }
    abstract function onClick();
    public $image;
}

abstract class Animal extends Inhabitant{
    public $name;

    abstract public function makeSound();
    function onClick(){

    }
   
    
}
class Monkey extends Animal {
    public $image;
    public function MakeSound(){

    }
}
class Giraffe extends Animal {
    public $image;

    public function MakeSound(){
        
    }
}
class Tiger extends Animal {
    public $image;

    public function MakeSound(){
        
    }
}
abstract class Plant extends Inhabitant{
    function onClick(){

    }
}
class Coconut extends Plant{
    public $image;
}
?>