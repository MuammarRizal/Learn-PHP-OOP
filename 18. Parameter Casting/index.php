<?php declare(strict_types=1);
require("./Post/Post.php");
include("./Post/Post.php");
use \Mutator\Post as PostMutator;

    $mutator = new PostMutator("Belajar","Muammar Rizal");
    echo $mutator->getContent();
?>