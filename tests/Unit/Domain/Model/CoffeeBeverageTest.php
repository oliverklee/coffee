<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\CoffeeBeverage;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(CoffeeBeverage::class)]
final class CoffeeBeverageTest extends TestCase
{
    private CoffeeBeverage $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new CoffeeBeverage();
    }

    #[Test]
    public function canBeInstantiated(): void
    {
        self::assertInstanceOf(CoffeeBeverage::class, $this->subject);
    }
}
