<?php 
    class MagicMethodToString{
        public function __toString(){
            return "Saya dicetak nih";
        }
    }

    echo new MagicMethodToString();
?>