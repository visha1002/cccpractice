<?php
    class Employee {
        public $name;
        public $position;
        public $salary;

        public function calculateBonus(){
            return $this->salary * 0.1;
        }
    }

    $employee1 = new Employee();
    $employee1->name = "Ronak";
    $employee1->position = "Manager";
    $employee1->salary = 55000;
    echo($employee1->calculateBonus());

?>