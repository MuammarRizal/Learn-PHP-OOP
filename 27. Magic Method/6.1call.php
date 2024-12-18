<?php 
    // call method
    class CallMethod{
        private function foo(string $name) : void{
            echo "Hello {$name}";
        }

        public function __call($name, $arguments){
            echo $name;
            var_dump($arguments);
            if( $name === 'foo'){
                $this->foo($arguments[0]);
            }else{
                throw new Error(sprintf("Undefined method %s on class %s",$name,__CLASS__));
            }
        }
    }

    $magic = new CallMethod();
    $magic->foo("Rizal");

    echo PHP_EOL;
?>