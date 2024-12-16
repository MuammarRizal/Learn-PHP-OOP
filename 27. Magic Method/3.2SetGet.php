<?php 

    // contoh __set
    class MagicMethodSet {
        private $name;
        public function __set($property, $value){
            if('name' === $property){
                $this->name = $value;
            }else{
                throw new ParseError(sprintf("Undefined Property %s in class %s",$property,__CLASS__));
            }
        }

        public function __get($property){
            echo "Hello ".$this->name;
        }
    };

    $magic = new MagicMethodSet();
    $magic->name = "Muammar Rizal";
    var_dump($magic);

    // contoh __get
    class MagicMethodGet{
        private $name;
        
        public function __construct(string $name){
            $this->name = $name;
        }

        public function __get($property){
            if("name" === $property){
                return $this->name;
            }else{
                throw new ParseError(sprintf("Undefined property %s in class %s",$property,__CLASS__));
            }
        }
    }

    $magicGet = new MagicMethodGet("Muammar Rizal");
    echo $magicGet->name;
    echo PHP_EOL;
?>