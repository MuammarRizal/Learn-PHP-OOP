<?php namespace Rizal\Api\Response;

use InterfaceRest;
    class Api implements InterfaceRest{
        public function handle(){
            echo "Hello Response";
        }
    }
?>