<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\Price;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Price::class)]
final class PriceTest extends TestCase
{
    private Price $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new Price();
    }

    #[Test]
    public function priceCanBeInstantiated(): void
    {
        self::assertInstanceOf(Price::class, $this->subject);
    }

    #[Test]
    public function amountCanBeSet(): void
    {
        $value = 123456.1;

        $this->subject->setAmount($value);

        self::assertSame($value, $this->subject->getAmount());
    }

    #[Test]
    public function amountInitiallyReturnsZero(): void
    {
        self::assertSame(0.0, $this->subject->getAmount());
    }
}
