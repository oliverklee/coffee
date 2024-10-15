<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\CoffeeBeverage;
use OliverKlee\Coffee\Domain\Model\Flavor;
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
    public function getSizeInitiallyReturnsZero(): void
    {
        self::assertSame(0, $this->subject->getSize());
    }

    #[Test]
    public function setSizeSetsSize(): void
    {
        $value = 123456;

        $this->subject->setSize($value);

        self::assertSame($value, $this->subject->getSize());
    }

    #[Test]
    public function setSizeCanSetSizeToZero(): void
    {
        $this->subject->setSize(0);

        self::assertSame(0, $this->subject->getSize());
    }

    #[Test]
    public function setSizeWithNegativeSizeThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Size must not be negative.');
        $this->expectExceptionCode(1728987200);

        $this->subject->setSize(-1);
    }

    #[Test]
    public function getTitleForOneFlavorReturnsFlavorTitleAndBeverageTitle(): void
    {
        $coffeeTitle = 'Cappuccino';
        $this->subject->setTitle($coffeeTitle);
        $flavorTitle = 'Leberwurst';
        $flavor = new Flavor($flavorTitle);

        $this->subject->addFlavor($flavor);

        self::assertSame($flavorTitle . ' ' . $coffeeTitle, $this->subject->getTitle());
    }

    #[Test]
    public function getTitleForTwoFlavorReturnsBothFlavorTitlesInAdditionOrderAndBeverageTitle(): void
    {
        $coffeeTitle = 'Americano';
        $this->subject->setTitle($coffeeTitle);
        $flavorTitle1 = 'Salted';
        $flavor1 = new Flavor($flavorTitle1);
        $this->subject->addFlavor($flavor1);
        $flavorTitle2 = 'Caramel';
        $flavor2 = new Flavor($flavorTitle2);
        $this->subject->addFlavor($flavor2);

        $result = $this->subject->getTitle();

        $expected = $flavorTitle1 . ' ' . $flavorTitle2 . ' ' . $coffeeTitle;
        self::assertSame($expected, $result);
    }
}
