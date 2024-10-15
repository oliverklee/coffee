<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Domain\Model;

class Discount
{
    private string $title = '';

    private Price $price;

    public function __construct()
    {
        $this->price = new Price();
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(Price $price): void
    {
        $this->price = $price;
    }
}
