<?php 
    class ConnectionDestruc{
        public function __destruct(){
            echo "Object dihapus dari memory";
        }
    }

    $conn = new ConnectionDestruc();
    $conn ->__destruct();
?>