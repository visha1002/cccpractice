<?php
    class Post {
        public $title;
        public $content;

        public function displayInfo(){
            echo "Title : $this->title <br> Content : $this->content";
        }
    }

    class Blog {
        private $posts = [];

        public function addPosts(Post $post){
            $this->posts[] = $post;
        }

        public function displayAllposts(){
            foreach($this->posts as $post){
                $post->displayInfo();
                echo "<br><br>";
            }
        }
    }

    $post1 = new Post();
    $post1->title = "Basics";
    $post1->content = "This post is about basics of PHP";

    $post2 = new Post();
    $post2->title = "Functions";
    $post2->content = "This post is about functions in PHP";

    $blog = new Blog();
    $blog->addPosts($post1);
    $blog->addPosts($post2);
    $blog->displayAllposts();
?>