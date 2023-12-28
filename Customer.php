<?php

class Customer {
    private $customerId;
    private $name;
    private $email;

    public function __construct($customerId, $name, $email) {
        $this->customerId = $customerId;
        $this->name = $name;
        $this->email = $email;
    }

    public function displayInfo() {
        echo "Customer ID: $this->customerId\n";
        echo "Name: $this->name\n";
        echo "Email: $this->email\n";
    }
}
