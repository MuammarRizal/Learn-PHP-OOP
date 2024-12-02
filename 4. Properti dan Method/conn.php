<?php 
class ConnectDB {
    public function connect(string $username,string $password, string $host="localhost",string | int $port=3306){
        return "koneksi ke username $username password $password host $host dan port $port";
    }
}

$koneksi = new ConnectDB();

echo $koneksi -> connect(username:"rizal",password:"123");
echo PHP_EOL;
?>

