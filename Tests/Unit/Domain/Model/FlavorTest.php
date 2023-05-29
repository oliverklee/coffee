<?php

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\Flavor;
use PHPUnit\Framework\TestCase;

class FlavorTest extends TestCase
{
    /**
     * @var bool
     */
    protected $backupGlobals = false;

    /**
     * @var Flavor
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new Flavor();
    }

    /**
     * @test
     */
    public function canBeInstantiated()
    {
        self::assertInstanceOf(AbstractEntity::class, $this->subject);
    }

    /**
     * @test
     */
    public function getTitleInitiallyReturnsEmptyString()
    {
        self::assertSame('', $this->subject->getTitle());
    }

    /**
     * @test
     */
    public function setTitleSetsTitle()
    {
        $title = 'Chocolate';

        $this->subject->setTitle($title);

        self::assertSame($title, $this->subject->getTitle());
    }
}
