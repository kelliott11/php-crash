<?php

class User {
    // properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    // a constructor is a method when an object is created
    public function __construct($name, $email, $password) {
        
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
    
   
}
// Instantiate a user object
 $user1 = new User('Kelvin', 'kelvin@gmail.com', '1234');
 $user2 = new User('Domonique', 'domonique@gmail.com', '5678');

// echo $user1->email;
// echo $user2->name;

// Inheritance

class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '4444', 'Manager');

echo $employee1->get_title();
