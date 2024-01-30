<?php
    class Student {
        public $name;
        public $age;
        public $grade;

        public function displayInfo(){
            echo "Name : $this->name <br> Age : $this->age <br> Grade : $this->grade";
        }
    }

    $student = new Student();
    $student->name = "Visha";
    $student->age = 21;
    $student->grade = "A";
    $student->displayInfo();
?>