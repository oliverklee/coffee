<?php

namespace OliverKlee\Coffee\Domain\Model;

class Basket
{
    /**
     * @var list<Priced>
     */
    private array $items = [];

    /**
     * @return list<Priced>
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Priced $item
     */
    public function addItem(Priced $item): void
    {
        if (in_array($item, $this->items, true)) {
            throw new \UnexpectedValueException('Item already present.', 1729075665);
        }

        $this->items[] = $item;
    }

    public function removeItem(Priced $item): void
    {
        $key = array_search($item, $this->items, true);
        if ($key !== false) {
            unset($this->items[$key]);
        } else {
            throw new \InvalidArgumentException('Item not found.', 1729081407);
        }

        $this->items = array_values($this->items);
    }
}
