<?php 
    class Mobil {
        public $roda = 4;
        private $berodah = 3;
        public function jalan(string | int $beroda) : string { // menggunakan public
            return "mobil berjalan dengan $beroda roda";
        }

        public function berodah(int $roda=2) : int {
            return $this -> berodah + $roda;
        }
    }

    $avanza = new Mobil();
    echo "Menggunakan public : "; echo $avanza -> jalan("4"); echo PHP_EOL;
    echo "Jumlah roda yang digunakan : "; echo $avanza -> berodah(3); echo PHP_EOL;
    echo $avanza -> roda; // error karena bersifat private
?>