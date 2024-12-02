<?php 
    class Lingkaran {
        public const PI = 3.14;

        public static function luas(int $jari) : int{
            return self::PI * $jari * $jari;
        }
    }

    $lingkaran = new Lingkaran();
    echo "Hasil luas dari lingkaran : ".$lingkaran ->luas('7'); echo PHP_EOL;
    echo "hasil luas dari lingkaran : ".Lingkaran::luas(7);

?>