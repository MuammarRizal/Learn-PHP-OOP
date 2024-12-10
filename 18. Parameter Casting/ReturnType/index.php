<?php 
require_once './Post.php';

$learn = new Post(null,"Belajar bersama muammar rizal");
echo $learn->getContent();