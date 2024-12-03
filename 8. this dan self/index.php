<?php 
    class printer {
        private $content;

        public function contentValue(string $content) : string {
            return $this->content="aku adalah printer ke $content";
        }

        public function cetak() : void{
            echo $this -> content;
        }
    }

    // printer 1
    $printer1 = new printer();
    $printer1->contentValue("1");
    echo $printer1 -> cetak(); echo PHP_EOL;

    // printer2
    $printer2 = new printer();
    $printer2->contentValue("2");
    echo $printer2 -> cetak();
?>
