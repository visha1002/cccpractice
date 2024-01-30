<?php
    class Book {
        public $title;
        public $author;

        public function displayInfo(){
            echo "Title : $this->title <br> Author : $this->author";
        }
    }

    class Library {
        private $books = [];

        public function addBook(Book $book){
            $this->books[] = $book;
        }

        public function displayAllBooks(){
            foreach($this->books as $book){
                $book->displayInfo();
                echo "<br><br>";
            }
        }
    }

    $book1 = new Book();
    $book1->title = "Birds and Beasts";
    $book1->author = "Mark twain";

    $book2 = new Book();
    $book2->title = "Alie in Wonderland";
    $book2->author = "Lewis caroll";

    $library = new Library();
    $library->addBook($book1);
    $library->addBook($book2);
    $library->displayAllBooks();
?>