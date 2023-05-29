<?php

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\CoffeeBeverage;
use PHPUnit\Framework\TestCase;

/**
 * @covers \OliverKlee\Coffee\Domain\Model\CoffeeBeverage
 */
final class CoffeeBeverageTest extends TestCase
{
    /**
     * @var bool
     */
    protected $backupGlobals = false;

    /**
     * @var CoffeeBeverage
     */
    protected $subject;

    protected function setUp(): void
    {
        $this->subject = new CoffeeBeverage();
    }

    /**
     * @test
     */
    public function canBeInstantiated()
    {
        self::assertInstanceOf(CoffeeBeverage::class, $this->subject);
    }
}
