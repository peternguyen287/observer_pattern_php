<?php

namespace Observer;

class Customer implements Observer
{

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $productName)
    {
        echo "Customer {$this->name} received a notification about a new product: {$productName}";
    }
}