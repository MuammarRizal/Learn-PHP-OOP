<?php 

class StringMutator{
    public static function bold(?string $word){
        return sprintf('<b>%s</b>',$word);
    }
}