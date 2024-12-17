<?php 
    class MagicMethod{
        private $data = [
            "name" => "Muammar Rizal",
            "address" => "JL H.Kaisin RT04/004"
        ];

        public function __sleep(){
            return ['data'];
        }
    }

    $magic = new MagicMethod();
    var_dump(serialize($magic));
?>