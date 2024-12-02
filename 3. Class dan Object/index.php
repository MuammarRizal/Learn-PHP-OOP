<?php 
    class Mobil{
        public $roda;
        public function suaraMobil(string $suara, string | int $roda){
            return "suara mobil $suara dan ada $roda roda";
        }
    }

    $rizal = new Mobil();
    echo $rizal->suaraMobil("Brem brem",4); echo PHP_EOL;
    echo $rizal->roda = 5; echo PHP_EOL;
    
    
?>