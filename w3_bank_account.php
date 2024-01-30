<?php
    class BankAccount {
        public $accountNumber;
        public $accountHolder;
        public $balance;

        public function __construct($accountNumber, $accountHolder, $initialBalance) {
            $this->accountNumber = $accountNumber;
            $this->accountHolder = $accountHolder;
            $this->balance = $initialBalance;
        }

        public function deposit($amount){
            $this->balance += $amount;
        }

        public function withdraw($amount){
            if($amount <= $this->balance){
                $this->balance -= $amount;
            }
            else{
                echo "Not enough Balance to withdraw!<br>";
            }
        }

        public function displayInfo(){
            echo "Account Number : {$this->accountNumber}, Account Holder : {$this->accountHolder}, Balance : {$this->balance} Rs<br>";
        }
    }

    $account1 = new BankAccount("1001456213","Richard Paul",3000);
    $account1->displayInfo();
    $account1->deposit(7099);
    $account1->displayInfo();
    $account1->withdraw(80000);
    $account1->displayInfo();

?>