<?php

class ECommerceSystem {
    public static function main() {
        // Create customers
        $customer1 = new Customer(1, "Alice", "alice@example.com");
        $customer2 = new Customer(2, "Bob", "bob@example.com");

        // Create products
        $laptop = new Product(1, "Laptop", 999.99);
        $smartphone = new Product(2, "Smartphone", 499.99);

        // Create orders
        $order1 = new Order(101, $customer1);
        $order1->addProduct($laptop);
        $order1->addProduct($smartphone);

        $order2 = new Order(102, $customer2);
        $order2->addProduct($smartphone);

        // Display order information
        echo "Order 1 Information:\n";
        $order1->displayInfo();

        echo "\nOrder 2 Information:\n";
        $order2->displayInfo();
    }
}

// Run the program
ECommerceSystem::main();
