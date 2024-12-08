<?php 
    use RequestInterface;
    class Request implements RequestInterface{
        public function handle(){
            echo "Hello rizal dari request interface";
        }
    }
?>

