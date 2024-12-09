<?php 
    class Products{
        private $judul,$penerbit,$tahun,$diskon = 10 ,$harga;

        public function __construct(string $judul,string $penerbit,int $tahun,$harga){
            $this -> judul = $judul;
            $this -> penerbit = $penerbit;
            $this -> tahun = $tahun;
            $this -> harga = $harga;
        }

        public function infoProduct(){
            echo "Judul : {$this->judul}, Penerbit : {$this->penerbit}, Tahun : {$this->tahun}";
        }

        public function totalHarga(){
            return "Total Harga : ".$this->harga * $this->diskon / 100;
        }

        public function setHarga(int $harga){
            if(!is_int($harga)){
                throw new Exception("Tolong jangan beri nilai string");
            }

            if($this->harga <= $harga){
                throw new Exception("Harganya mahalin lagi dong");
            }

            return $this->harga = $harga;
        }

        public function newHarga(){
            return "Harga terbaru : ".$this->harga;
        }
    }

    class Komik extends Products{
        public $jmlHalaman;
        public function __construct(string $judul,string $penerbit,int $tahun,int $halaman,$harga){
            parent::__construct($judul,$penerbit,$tahun,$harga);
            $this->jmlHalaman = $halaman;
        }

        public function detailKomik(){
            return "{$this->infoProduct()}, Halaman : {$this->jmlHalaman}";
        }
    }

    class Game extends Products{
        public $durasi;
        public function __construct(string $judul,string $penerbit,int $tahun,int $durasi,$harga){
            parent::__construct($judul,$penerbit,$tahun,$harga);
            $this->durasi = $durasi;
        }

        public function detailGame(){
            return "{$this->infoProduct()}, Durasi : {$this->durasi}";
        }
    }

    $komik = new Komik("Naruto","Muammar",2002,5,10000);
    echo $komik->infoProduct(); echo "<br />";
    echo $komik->detailKomik(); echo "<br />";
    echo $komik->totalHarga(); echo "<br />";
    $komik->setHarga(99);
    echo $komik->newHarga();
    echo "<br />";
    echo "<br />";

    $game = new Game("Call OF Duty","COD WARFARE",2010,4,10000);
    echo $game->infoProduct(); echo "<br />";
    echo $game->detailGame();
?>