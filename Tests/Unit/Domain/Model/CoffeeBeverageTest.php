<?php

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\CoffeeBeverage;
use PHPUnit\Framework\TestCase;

class CoffeeBeverageTest extends TestCase
{
    /**
     * @var bool
     */
    protected $backupGlobals = false;

    /**
     * @var CoffeeBeverage
     */
    protected $subject = null;

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
