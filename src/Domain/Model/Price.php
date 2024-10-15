<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Domain\Model;

class Price
{
    private float $amount = 0.00;

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
