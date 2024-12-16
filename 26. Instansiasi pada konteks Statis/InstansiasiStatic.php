<?php 

    // cara pertama
    class A {
        public function bar(){
            echo "Bar";
        }

        public static function foo(){
            echo "foo";
            (new A())->bar();
        }
    }
    echo "Cara Pertama : ".A::foo();

    // Cara kedua
    class B {
        public function bar(){
            echo "bar";
        }

        public static function foo(){
            echo "foo";
            (new self())->bar();
        }
    }

    echo PHP_EOL;
    echo "Cara Kedua : ".B::foo();

    // cara ketiga lebih direkomendasi
    class C {
        public function foo(){
            echo "foo";
        }

        public static function bar(){
            echo "bar";
            (new static())->foo();
        }
    }

    echo PHP_EOL;
    echo "Cara ketiga : ".C::bar();

    // Cara Keempat
    class D {
        public function foo(){
            echo "foo";
        }

        public static function bar(){
            echo "Bar";static::bar(); // static nya bisa juga diganti menjadi self
        }
    }
    echo "Cara keempat : ".D::bar();
?>