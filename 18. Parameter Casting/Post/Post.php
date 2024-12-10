<?php namespace Mutator;
class Post{
    private $title,$content;
    public function __construct(string $title, string $content){
        $this->title = $title;
        $this->content = $content;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getContent(){
        return $this->content;
    }
}
