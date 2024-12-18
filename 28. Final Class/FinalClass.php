<?php 
    // <!-- FINAL CLASS
    final class FinalClass{
        public function __construct(){
            echo "Hello World";
        }
    }

    // akan error
    // class ChildClass extends FinalClass{} 

    // <!-- FINAL METHOD
    class FinalMethod{
        final public function finalMethod(){
            echo "Hello world";
        }
    }
?>