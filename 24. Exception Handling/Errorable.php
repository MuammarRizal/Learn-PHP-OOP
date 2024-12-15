<?php 
    class Errorable{
        public static function calculate(int $number){ // Error DEvisionByZeroError
            return ($number % 0); // bila menggunakan $number / 0 maka hanya akan menampilkan warning
        }
    }

    // Errorable::calculate(7);
    // echo "Ini tidak akan di eksekusi"; echo PHP_EOL;

    /**
     * PHP Secara otomatis akan membuat object DevisionByZeroError dan kemudian akan mencari block catch untuk kemudian akan memberikan error tersebut agar dapat di tangani. 
     * 
     * Bila block catch tidak ditemukan maka PHP akan mencoba memanggil function didefinisikan pada fungsi set_exception_handler().
     * 
     * bila fungsi set_exception_handler() tidak didefinisikan, maka PHP akan mengubahnya menjadi fatar Error
     * 
     * untuk menagani error diatas kita bisa menggunakan block try and catch
     */

     try{
        Errorable::calculate(7);
     }catch(DivisionByZeroError $e){
        echo $e->getMessage();
        echo PHP_EOL;
     }finally{
        echo "Apapun yang terjadi ini harus tetap dieksekusi";
     }

?>