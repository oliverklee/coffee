<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\CoffeeBeverage;
use PHPUnit\Framework\TestCase;

#[\PHPUnit\Framework\Attributes\CoversClass(\OliverKlee\Coffee\Domain\Model\CoffeeBeverage::class)]
final class CoffeeBeverageTest extends TestCase
{
    private CoffeeBeverage $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new CoffeeBeverage();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function canBeInstantiated(): void
    {
        self::assertInstanceOf(CoffeeBeverage::class, $this->subject);
    }
}
