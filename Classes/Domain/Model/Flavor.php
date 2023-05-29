<?php

namespace OliverKlee\Coffee\Domain\Model;

/**
 * This model represents a coffee flavor.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
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
     *
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
