<?php 
    class Products{
        public $judul,$penerbit,$tahun;
        public function __construct(string $judul,string $penerbit,int $tahun){
            $this -> judul = $judul;
            $this -> penerbit = $penerbit;
            $this -> tahun = $tahun;
        }

        public function infoProduct(){
            echo "Judul : {$this->judul}, Penerbit : {$this->penerbit}, Tahun : {$this->tahun}";
        }
    }

    class Komik extends Products{
        public $jmlHalaman;
        public function __construct(string $judul,string $penerbit,int $tahun,int $halaman){
            parent::__construct($judul,$penerbit,$tahun);
            $this->jmlHalaman = $halaman;
        }

        public function detailKomik(){
            return "{$this->infoProduct()}, Halaman : {$this->jmlHalaman}";
        }
    }

    class Game extends Products{
        public $durasi;
        public function __construct(string $judul,string $penerbit,int $tahun,int $durasi){
            parent::__construct($judul,$penerbit,$tahun);
            $this->durasi = $durasi;
        }

        public function detailGame(){
            return "{$this->infoProduct()}, Durasi : {$this->durasi}";
        }
    }

    $komik = new Komik("Naruto","Muammar",2002,5);
    echo $komik->infoProduct(); echo "<br />";
    echo $komik->detailKomik(); echo "<br />";

    "<br />";

    $game = new Game("Call OF Duty","COD WARFARE",2010,4);
    echo $game->infoProduct(); echo "<br />";
    echo $game->detailGame();
?>