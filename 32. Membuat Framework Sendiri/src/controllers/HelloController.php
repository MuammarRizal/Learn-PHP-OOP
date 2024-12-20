<?php

use Symfony\Component\HttpFoundation\Response;

    class HelloController{
        public function hello() {
            return new Response("Hello World");
        }

        public function greet($nama){
            return new Response(sprintf("Selamat Dateng, %s",$nama));
        }
    }
?>