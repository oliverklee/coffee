<?php

namespace OliverKlee\Coffee\Domain\Model;

/**
 * A coffee flavor.
 */
class Flavor
{
    /**
     * @var string
     */
    protected $title = '';

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
