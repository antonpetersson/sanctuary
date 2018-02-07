<?php
abstract class Inhabitant{
    protected $image;

    public abstract function onClick();
    
    public function draw(){
        echo "<img src='./" . $this->image . "' onclick='".$this->onClick(). "' />";
    }
    
    
}

abstract class Animal extends Inhabitant{
    public $name;

    abstract public function makeSound();
   
    
}
class Monkey extends Animal {
    protected $image = "monkey.jpg";
    public function makeSound(){
        return null;
    }
    public function onClick(){
        $sound = 'var audio = new Audio("./monkey.mp3"); audio.play(); ';
        $alert = 'alert("MONKEY");';
        return $sound . $alert;
        
    }
}

class Giraffe extends Animal {
    protected $image = "giraffe.jpg";

    public function makeSound(){
        return null;
    }
    public function onClick(){
        $sound = 'var audio = new Audio("./giraffe.mp3"); audio.play(); ';
        $alert = 'alert("GIRAFFE");';
        return $sound . $alert;
    }
}
class Tiger extends Animal {
    protected $image = "tiger.jpg";

    public function makeSound(){
        return null;
    }
    public function onClick(){
        $sound = 'var audio = new Audio("./tiger.mp3"); audio.play(); ';
        $alert = 'alert("TIGER");';
        return $sound . $alert;
       
    }
}
abstract class Plant extends Inhabitant{
    function onClick(){

    }
}
class Coconut extends Plant{
    protected $image = "coconut.jpg";
}


?>