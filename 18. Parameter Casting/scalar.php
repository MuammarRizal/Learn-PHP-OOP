<?php declare(strict_types=1);
    class ParameterHinting{
        public function __construct(array $params){
            
        }

        public function stringParams(string $params){
            
        }

        public function intParams(int $params){
            
        }

        public function floatParams(float $params){
            
        }
    }

    $rizal = new ParameterHinting(array());
    echo $rizal->intParams(2)
?>