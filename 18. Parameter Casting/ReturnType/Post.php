<?php
require_once "./PostInterface.php";

class Post implements PostInterface{
    private $title,$content;

    public function __construct(?string $title="Belajar",string $content){
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle(): string{
        return $this->title;
    }

    public function getContent(): string{
        return $this->content;
    }
}