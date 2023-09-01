<?php

namespace Observer;

class ProductCatalog
{

    private array $observers = [];

    private array $newProducts = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function addNewProduct(string $productName)
    {
        $this->newProducts[] = $productName;
        $this->notifyObservers($productName);
    }

    private function notifyObservers(string $productName): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($productName);
        }
    }
}