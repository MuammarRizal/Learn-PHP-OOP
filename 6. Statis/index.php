<?php 
    class Singa{
        public static $suara = "ngraaahhh"; //sebenernya tidak boleh property dibuat public
        public static $kaki = 4;
        private static $mata  = 2;

        public static function suaraSinga() : void{
            echo "Suara singa adalah ngaungg";
        }

        public static function kakiSinga(): int {
            return self::$kaki;
        }

        public static function mataSinga() : string{
            return "Mata singa ada : ".static::$mata;
        }
    }

    echo "Suara Singa : ".Singa:: suaraSinga(); echo PHP_EOL; 
    echo "Kaki Singa : ".Singa:: kakiSinga(); echo PHP_EOL; 
    echo "Suara property singa : ".Singa:: $suara; echo PHP_EOL; 
    echo Singa::mataSinga();

?>