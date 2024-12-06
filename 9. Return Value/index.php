<?php 
    class Rizal{
        public static $jange = "programmer";
        public function sayaAdalah(){
            return "Saya adalah muammarrizal";
        }

        static public function saya(){
            return self::$jange;
        }

        public function dia(){
            self::saya();
        }
    }
    
    class Nah extends Rizal{
        public static $jange = "Kasir";
        public function sayaAdalah(){
            return "Saya alfina rahmalia";
        }
    }

    $nahBwk = new Nah();
    echo $nahBwk::saya();

    // $jange = new Rizal();
    // echo $jange->sayaAdalah(); echo PHP_EOL;

    // echo Rizal::saya();
?>