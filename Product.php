<?php

class Product {
    private $productId;
    private $productName;
    private $price;

    public function __construct($productId, $productName, $price) {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->price = $price;
    }

    public function displayInfo() {
        echo "Product ID: $this->productId\n";
        echo "Product Name: $this->productName\n";
        echo "Price: $this->price\n";
    }
}
