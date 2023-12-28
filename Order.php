<?php

class Order {
    private $orderId;
    private $customer;
    private $products;

    public function __construct($orderId, $customer) {
        $this->orderId = $orderId;
        $this->customer = $customer;
        $this->products = [];
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }
        return $total;
    }

    public function displayInfo() {
        echo "Order ID: $this->orderId\n";
        $this->customer->displayInfo();
        echo "Products in the order:\n";
        foreach ($this->products as $product) {
            $product->displayInfo();
        }
        echo "Total: " . $this->calculateTotal() . "\n";
    }
}
