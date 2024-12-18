<?php
    class ArrayAccessObject implements ArrayAccess{
        private $container;
        public function offsetSet(mixed $offset, mixed $value): void{
            if(is_null($offset)){
                $this->container[] = $value;
            }else{
                $this->container[$offset] = $value;
            }
        }

        public function offsetExists(mixed $offset): bool{
            return isset($this->container[$offset]);
        }

        public function offsetUnset(mixed $offset): void{
            unset($this->container[$offset]);
        }

        public function offsetGet(mixed $offset): mixed{
            return isset($this->container[$offset]) ? $this->container[$offset] : null;
        }
    }

    $object = new ArrayAccessObject();
    $object['name'] = "Muammar Rizal";
    $object['address']= "In your Memory";
    $object["rizal"] = "TOpet";
    var_dump($object)
?>