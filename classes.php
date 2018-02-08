<?php
abstract class Inhabitant{
    protected $image;

    public abstract function onClick();
    
    public function draw(){
        echo "<img src='./media/" . $this->image . "' onclick='".$this->onClick(). "' />";
    }  
}

    abstract class Animal extends Inhabitant{
        private $names = array(
            'Bailey', 'Bella', 'Max', 'Lucy', 'Charlie', 'Molly', 'Buddy', 'Daisy', 'Rocky', 'Maggie', 
            'Jake', 'Sophie', 'Jack', 'Sadie', 'Toby', 'Chloe', 'Cody', 'Bailey', 'Buster', 'Lola',
            'Duke', 'Zoe', 'Cooper', 'Abby', 'Rile', 'Ginger', 'Harley', 'Roxy', 'Bear', 'Gracie',
            'Tucker', 'Coco', 'Murphy', 'Sasha', 'Lucky', 'Lily', 'Oliver', 'Angel', 'Sam', 'Princess',
            'Oscar', 'Emma', 'Teddy', 'Annie', 'Winston', 'Rosie', 'Sammy', 'Ruby'
        );
        public $random_name;
        function __construct(){
            $this->random_name = $this->names[mt_rand(0, sizeof($this->names) - 1)];
        }

    }
        class Monkey extends Animal {
            protected $image = "monkey.jpg";
        
            public function onClick(){
                $sound = 'var audio = new Audio("./media/monkey.mp3"); audio.play(); ';
                $alert = 'alert("Jag heter '. $this->random_name . '");';
                return $sound . $alert;
                echo $random_name;
                
            }
        }

        class Giraffe extends Animal {
            protected $image = "giraffe.jpg";

            public function onClick(){
                $sound = 'var audio = new Audio("./media/giraffe.mp3"); audio.play(); ';
                $alert = 'alert("Jag heter '. $this->random_name . '");';
                return $sound . $alert;
            }
        }
        class Tiger extends Animal {
            protected $image = "tiger.jpg";

            public function onClick(){
                $sound = 'var audio = new Audio("./media/tiger.mp3"); audio.play(); ';
                $alert = 'alert("Jag heter '. $this->random_name . '");';
                return $sound . $alert;
            
            }
        }
        class Lion extends Animal {
            protected $image = "lion.jpg";

            public function onClick(){
                $sound = 'var audio = new Audio("./media/tiger.mp3"); audio.play(); ';
                $alert = 'alert("Jag heter '. $this->random_name . '");';
                return $sound . $alert;
            
            }
        }
        class Antelope extends Animal {
            protected $image = "antelope.jpg";

            public function onClick(){
                $sound = 'var audio = new Audio("./media/tiger.mp3"); audio.play(); ';
                $alert = 'alert("Jag heter '. $this->random_name . '");';
                return $sound . $alert;
            
            }
        }
        class Gorilla extends Animal {
            protected $image = "gorilla.jpg";

            public function onClick(){
                $sound = 'var audio = new Audio("./media/tiger.mp3"); audio.play(); ';
                $alert = 'alert("Jag heter '. $this->random_name . '");';
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
        class Palmtree extends Plant{
            protected $image = "palmtree.jpg";
        }
        class Pinetree extends Plant{
            protected $image = "pinetree.jpg";
        }
        class Rose extends Plant{
            protected $image = "rose.jpg";
        }


?>

