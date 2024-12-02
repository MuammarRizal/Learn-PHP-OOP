<?php  
class ConnectDB {
    public function connect(string $username,string $password, string $host="localhost",string | int $port=3306){
        return "koneksi ke username $username password $password host $host dan port $port";
    }
}

$koneksi = new ConnectDB();

echo $koneksi -> connect(username:"rizal",password:"123");
echo PHP_EOL;

    class Mobil {
        public $roda = 4; // ini adalah property

        public function jalan($arah ='depan'){
            echo "mobil berjalan kearah $arah";
        }
    }

    $avanza = new Mobil();
    echo $avanza -> roda;  echo PHP_EOL;
    echo $avanza -> jalan(); echo PHP_EOL;
    echo $avanza -> jalan("belakang");
?>