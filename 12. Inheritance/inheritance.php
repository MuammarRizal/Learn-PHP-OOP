<?php 
    class Hewan {
        private string $jenis ;
        public function setJenis(string $jenis) : void{
            $this->jenis = $jenis;
        }

        public function getJenis() : string{
            return $this->jenis;
        }
    }

    class Kambing extends Hewan{};
    class Harimau extends Hewan{};

    $kambing = new Kambing();
    echo $kambing->setJenis("Kaki empat");
    $jeniss = $kambing->getJenis();
    echo gettype($jeniss);
?>