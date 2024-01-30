<?php
    class File{
        public $filename;
        public $size;

        public function getFileExtension(){
            $parts = explode(".",$this->filename);
            return end($parts);
        }

        public function displayInfo(){
            echo "File Name : $this->filename <br> Size : $this->size KB";
        }
    }

    $file = new File();
    $file->filename = "functions.php";
    $file->size = 340;

    echo "File Extension is : " . $file->getFileExtension() . "<br>";
    $file->displayInfo();
?>