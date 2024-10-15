<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\Discount;
use OliverKlee\Coffee\Domain\Model\Price;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Discount::class)]
class DiscountTest extends TestCase
{
    private Discount $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new Discount();
    }

    #[Test]
    public function discountCanBeInstantiated(): void
    {
        self::assertInstanceOf(Discount::class, $this->subject);
    }

    #[Test]
    public function getTitleInitiallyReturnsEmptyString(): void
    {
        self::assertSame('', $this->subject->getTitle());
    }

    #[Test]
    public function setTitleSetsTitle(): void
    {
        $title = 'Espresso (gar nicht so schlecht)';

        $this->subject->setTitle($title);

        self::assertSame($title, $this->subject->getTitle());
    }

    #[Test]
    public function getPriceForDiscountInitiallyReturnsPrice(): void
    {
        self::assertInstanceOf(Price::class, $this->subject->getPrice());
    }

    #[Test]
    public function getPriceForDiscountReturnsPriceInstance(): void
    {
        $price = new Price();

        $this->subject->setPrice($price);

        self::assertInstanceOf(Price::class, $this->subject->getPrice());
    }

    #[Test]
    public function getPriceForDiscountReturnsPriceSet(): void
    {
        $price = new Price();
        $this->subject->setPrice($price);

        self::assertSame($price, $this->subject->getPrice());
    }

}
