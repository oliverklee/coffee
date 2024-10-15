<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Domain\Model;

/**
 * A coffee flavor.
 */
readonly class Flavor
{
    public function __construct(private string $title)
    {
        if ($title === '') {
            throw new \InvalidArgumentException('Title must not be empty.', 1728990117);
        }
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
