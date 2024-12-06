<?php 
    class Motor {
        private $roda = 4;
        public function rodaAja(){
            return $this->roda + 2;
        }

        public function getRoda(){
            return $this->rodaAja();
        }
    }

    $mobil = new Motor();
    echo $mobil -> rodaAja();
?>