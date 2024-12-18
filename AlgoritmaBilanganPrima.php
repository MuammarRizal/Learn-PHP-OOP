<?php 
    class BilanganPrima{
        public static function isPrime(int $n){
            for($i=2; $i<$n; $i++){
                if($n % $i === 0){
                    return false;
                }
            }
            return true;
        }

        public static function showPrime(int $n){
            for($i=2; $i<$n; $i++){
                if(self::isPrime($i)){
                    echo "Bilangan Prima {$i}";
                    echo PHP_EOL;
                }else{
                    echo "Bukan Prima {$i}";
                    echo PHP_EOL;
                }
            }
        }
    }

    BilanganPrima::showPrime(100);
?>