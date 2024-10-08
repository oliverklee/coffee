<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Domain\Model;

/**
 * A coffee flavor.
 */
class Flavor
{
    private string $title = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}
