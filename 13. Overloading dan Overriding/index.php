<?php 
    class PostRepository{
        public function getLatestPost(){
            $posts =[ [
                'id' => 1,
                'title' => 'Judul Pertama',
                'content' => 'Contoh Content Pertama',
            ], [
                'id' => 2,
                'title' => 'Judul Kedua',
                'content' => 'Contoh Content Kedua',
            ], [
                'id' => 3,
                'title' => 'Judul Ketiga',
                'content' => 'Contoh Content Ketiga',
            ],
        ];
        return $posts;
        }
    }

    class SuffledPostRepository extends PostRepository{
        public function getLatestPost(){
            $posts = parent::getLatestPost();
            shuffle($posts);
            return $posts;
        }
    }

    $postRepository = new PostRepository();
    print_r($postRepository->getLatestPost());

    $suffledRepository = new SuffledPostRepository();
    print_r($suffledRepository->getLatestPost());

?>