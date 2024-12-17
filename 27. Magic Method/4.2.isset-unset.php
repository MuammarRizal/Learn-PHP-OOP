<?php 
    /**
     * __ISSET
     * Magic method __isset() akan dipanggil ketika kita memanggil fungsi isset() atau empty() untuk mengecek ada tidaknya property yang tidak dapat diakses dari luar
     */

     class MagicMethodIsset1{
        private $name;
     }

     $magic = new MagicMethodIsset1();
     var_dump(isset($magic->name)); // False

     class MagicMethodIsset2{
        private $name;
        public function __isset($property){
            if("name" === $property){
                return true;
            }
        }
     }
     $magicIsset = new MagicMethodIsset2();
     var_dump(isset($magicIsset->name));

     /**
      * __UNSET
      * Magic method unset akan dipanggil ketika kita ingin mengunset sebuah property
      */

     class MagicMethodUnset{
        private $data = [
            "name" => "Muammar Rizal",
            "address" => "JL H.Kaisin RT 04/004"
        ];

        public function __unset($property){
            if(isset($this->data[$property])){
                unset($this->data[$property]);
            }
        }
     }

     $data = new MagicMethodUnset();
     var_dump($data);
     unset($data->address);
     var_dump($data);
?>