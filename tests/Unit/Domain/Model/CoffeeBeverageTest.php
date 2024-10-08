<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\CoffeeBeverage;
use PHPUnit\Framework\TestCase;

/**
 * @covers \OliverKlee\Coffee\Domain\Model\CoffeeBeverage
 */
final class CoffeeBeverageTest extends TestCase
{
    private CoffeeBeverage $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new CoffeeBeverage();
    }

    /**
     * @test
     */
    public function canBeInstantiated(): void
    {
        self::assertInstanceOf(CoffeeBeverage::class, $this->subject);
    }
}
