<?php 
    interface HewanInterface{
        public function getJenis();
    }

    class Kambing implements HewanInterface{
        public function getJenis(){
            return 'Herbivora';
        }
    }

    class Singa implements HewanInterface{
        public function getJenis(){
            return 'Karnivora';
        }
    }

    /**
     * pada contoh diatas kita memiliki interface HewanInterface dan mempunyai 1 abstract method yaitu getJenis()
     * 
     * setiap class yang mengimplementasikan interface HewanInterface harus membuat implementasi dari method getJenis()
     * 
     * Kita juga dapat menggabungkan interface dan abstract class 
     * contoh ada di interface.php
     */