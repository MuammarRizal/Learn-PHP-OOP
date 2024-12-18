<?php 
    for($i=1; $i<100;$i++){
        if($i % 3 === 0 && $i % 5 === 0){
            echo "FizzBuzz";
            echo PHP_EOL;
        }else if($i % 3 === 0){
            echo "Fizz";
            echo PHP_EOL;
        }else if($i % 5 === 0){
            echo "Buzz";
            echo PHP_EOL;
        }else{
            echo $i;
            echo PHP_EOL;
        }
    }
?>