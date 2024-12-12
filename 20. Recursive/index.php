<?php 

class Faktorial{

    // tanpa recursive
    public static function nonRecursive(int $number) : int{
        $result = 1;
        for($i=1; $i<=$number;$i++){
            $result *= $i;
        }

        return $result;
    }

    // Menggunakan Recursive
    public static function recursive(int $number){
        if(2 > $number) {return $number;};

        return $number * self::recursive($number - 1);
    }
}

echo "Non Rekursif : ".Faktorial::nonRecursive(4);
echo PHP_EOL;
echo "Rekursif : ".Faktorial::recursive((4));