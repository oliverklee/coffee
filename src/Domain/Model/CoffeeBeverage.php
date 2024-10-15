<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Domain\Model;

/**
 * A coffee beverage.
 */
class CoffeeBeverage
{
    private string $title = '';

    private int $size = 0;

    /**
     * @var list<Flavor>
     */
    private array $flavors = [];

    public function getTitle(): string
    {
        $flavorTitles = [];

        foreach ($this->flavors as $flavor) {
            $flavorTitles[] = $flavor->getTitle();
        }

        return trim(\implode(' ', $flavorTitles) . ' ' . $this->title);
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): void
    {
        if ($size < 0) {
            throw new \InvalidArgumentException('Size must not be negative.', 1728987200);
        }

        $this->size = $size;
    }

    public function addFlavor(Flavor $flavor): void
    {
        $this->flavors[] = $flavor;
    }
}
