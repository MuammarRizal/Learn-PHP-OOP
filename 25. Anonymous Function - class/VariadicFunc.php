<?php 
    class VariadicClass{
        public static function getFoo(int $number): void{
            var_dump(func_get_args());
            echo "Foo".$number;
        }
    };

    VariadicClass::getFoo(8,"Rizal","Enah");

    echo PHP_EOL;

    // cara yang direkomendasikan
    class VariadicNumber{
        public static function getFoo(int ...$numbers): int{
            return array_sum($numbers);
        }
    };
    echo "Cara Rekomendasi : ".VariadicNumber::getFoo(1,2,3,4,5); echo PHP_EOL;

    // cara ketiga
    class VariadicKetiga{
        public static function add(int ...$numbers): int{
            return array_sum($numbers);
        }
    };
    $numbers = [1,2,3,4,5];
    echo "Cara Ketiga : ".VariadicKetiga::add(...$numbers);
    
?>