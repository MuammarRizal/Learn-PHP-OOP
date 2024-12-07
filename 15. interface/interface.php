<?php
    interface HewanInterface{
        public function getJenis();
    }

    interface MamaliaInterface{
        public function menyusui();
    }

    abstract class Hewan{
        private $jenis;

        public function setJenis(string $jenis) : string{
            return $this->jenis = $jenis;
        }

        public function getJenis(){
            return $this->jenis;
        }
    }

    class Kambing extends Hewan implements HewanInterface,MamaliaInterface{
        public function menyusui(){
            echo "kambing nyusu";
        }
    }
    class Singa extends Hewan implements HewanInterface{}

    $kambing = new Kambing();
    $kambing->setJenis("Herbivora");
    
    $singa = new Singa();
    $singa->setJenis("Karnivora");

    echo $singa->getJenis(); echo PHP_EOL;
    echo $kambing->getJenis();

    