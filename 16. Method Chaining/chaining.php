<?php 
    class StringMutator{
        private string $word;
        public function __construct(string $word) {
            return $this -> word = $word;
        }
        
        public function italic(){
            $this->word = sprintf("<i>%s</i>",$this->word);
            return $this;
        }

        public function bold(){
            $this->word = sprintf("<b>%s</b>",$this->word);
            return $this;
        }
    }

    $s = new StringMutator("Muammar Rizal");
    echo $s->bold()->italic();
?>
