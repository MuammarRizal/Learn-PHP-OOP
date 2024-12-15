<?php 
    echo preg_replace_callback('/[a-z]+/i',function (array $match){
        return 'PHP' === $match[0] ? 'OOP' : $match[0];
    },'Saya belajar PHP');

    echo PHP_EOL;

    // INI ADALAH LAMBDA FUNCTION
    $cetakdilayar=function ($word){
        echo $word;
    };
    $cetakdilayar("Ini adalah lambda function");

    // INI ADALAH CLOSURE FUNCTON
    $word = "Ini adalah closure function";
    $funcClosure = function () use($word){
        echo $word;
    };
    $funcClosure();
?>