<?php

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\Flavor;
use PHPUnit\Framework\TestCase;

/**
 * @covers \OliverKlee\Coffee\Domain\Model\Flavor
 */
class FlavorTest extends TestCase
{
    /**
     * @var Flavor
     */
    protected $subject = null;

    protected function setUp(): void
    {
        $this->subject = new Flavor();
    }

    /**
     * @test
     */
    public function canBeInstantiated()
    {
        self::assertInstanceOf(Flavor::class, $this->subject);
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
