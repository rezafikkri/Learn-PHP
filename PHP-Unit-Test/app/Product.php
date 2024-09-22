<?php

namespace RezaFikkri\PHPUnit;

class Product
{
    private string $id, $name, $description;
    private int $price, $quantity;

    // Getter and Setter for $id
    public function getId(): string {
        return $this->id;
    }

    public function setId(string $id): void {
        $this->id = $id;
    }

    // Getter and Setter for $name
    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    // Getter and Setter for $description
    public function getDescription(): string {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    // Getter and Setter for $price
    public function getPrice(): int {
        return $this->price;
    }

    public function setPrice(int $price): void {
        $this->price = $price;
    }

    // Getter and Setter for $quantity
    public function getQuantity(): int {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }
}
