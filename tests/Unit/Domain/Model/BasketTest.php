<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\Basket;
use OliverKlee\Coffee\Domain\Model\Priced;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Basket::class)]
class BasketTest extends TestCase
{
    /**
     * @var Basket
     */
    protected $subject;

    #[\Override]
    public function setUp(): void
    {
        $this->subject = new Basket();
    }

    #[Test]
    public function basketCanBeInstantiated(): void
    {
        self::assertInstanceOf(Basket::class, $this->subject);
    }

    #[Test]
    public function getItemsWithNoItemsReturnsEmptyArray(): void
    {
        self::assertSame([], $this->subject->getItems());
    }

    #[Test]
    public function getItemsWithItemAddedReturnsOneItem(): void
    {
        $item = $this->createStub(Priced::class);
        $this->subject->addItem($item);

        self::assertSame([$item], $this->subject->getItems());
    }

    #[Test]
    public function getItemsWithTwoItemsAddedReturnsTwoItems(): void
    {
        $item1 = $this->createStub(Priced::class);
        $this->subject->addItem($item1);
        $item2 = $this->createStub(Priced::class);
        $this->subject->addItem($item2);

        self::assertSame([$item1, $item2], $this->subject->getItems());
    }

    #[Test]
    public function addItemWithPresentItemThrowsException(): void
    {
        $this->expectException(\UnexpectedValueException::class);
        $this->expectExceptionMessage('Item already present.');
        $this->expectExceptionCode(1729075665);

        $item = $this->createStub(Priced::class);
        $this->subject->addItem($item);
        $this->subject->addItem($item);
    }

    #[Test]
    public function removeItemRemovesItem(): void
    {
        $item = $this->createStub(Priced::class);
        $this->subject->addItem($item);

        $this->subject->removeItem($item);

        self::assertSame([], $this->subject->getItems());
    }

    #[Test]
    public function removeItemForOneOfMultipleItemsRemovesLastItemGiven(): void
    {
        $item1 = $this->createStub(Priced::class);
        $this->subject->addItem($item1);
        $item2 = $this->createStub(Priced::class);
        $this->subject->addItem($item2);

        $this->subject->removeItem($item2);

        self::assertSame([$item1], $this->subject->getItems());
    }

    #[Test]
    public function removeItemForOneOfMultipleItemsRemovesAnyItemGiven(): void
    {
        $item1 = $this->createStub(Priced::class);
        $this->subject->addItem($item1);
        $item2 = $this->createStub(Priced::class);
        $this->subject->addItem($item2);

        $this->subject->removeItem($item1);

        self::assertSame([$item2], $this->subject->getItems());
    }

    #[Test]
    public function removeItemForNotExistingItemGiven(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Item not found.');
        $this->expectExceptionCode(1729081407);

        $item = $this->createStub(Priced::class);
        $this->subject->removeItem($item);

    }
}
