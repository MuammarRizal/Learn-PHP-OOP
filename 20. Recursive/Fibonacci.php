<?php 
class Fibonacci{
    public static function calculate(int $limit){
        if(0 === $limit || 1 === $limit) {return $limit;};

        if( 2 === $limit ) {return 1;};

        return self::calculate($limit - 1) + self::calculate($limit - 2);
    }
}


echo Fibonacci::calculate(6);
echo PHP_EOL;