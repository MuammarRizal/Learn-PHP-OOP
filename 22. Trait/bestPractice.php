<?php 
    interface ContainerInterface{
        public function setContainer(string $conn);
    } 

    trait ContainerAwareTrait{
        protected $container;

        public function setContainer(string $conn){
            $this->container = $conn;
        }

        public function getContainer(): string{
            if($this->container === null || !$this->container){
                return "Tolong isi setContainer dulu";
            }
            return $this->container;
        }
    }

    class Container{
        use ContainerAwareTrait;
    }

    $index = new Container();
    echo $index->getContainer();
?>