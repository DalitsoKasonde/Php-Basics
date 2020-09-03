<?php
    class Person{
        private $name;
        private $email;
        private static $ageLimit = 40;

        // CONSTRUCTOR 

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            // echo 'Person created <br>';
            echo __CLASS__.' created <br>';  //using a magic method (gets class name)

        } 
        // deconstructor 

        public function __destruct(){
            echo __CLASS__.' destroyed <br>';  

        } 

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail($email){
            return $this->email. '<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    // static props and methods 
    // echo Person::$ageLimit;
    // echo Person::getAgeLimit();


    // $person1 = new Person('John Doe', 'john@mail.co');

    // $person1->setName('John Doe');

    // echo $person1->getName();
    // echo $person1->getEmail();

    // $person1->name = 'John Doe';

    // echo $person1->name;

    // inheritance 

    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created ';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance. '<br>';
        }
    }

    // $customer1 = new Customer('John Doe', 'john@mail.co', 300);

    // echo $customer1->getBalance();
?>