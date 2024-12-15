<?php 
    $foo = new class{
        public function foo(){
            echo "foo";
        }
    };

    $foo->foo();
?>