<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\Flavor;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Flavor::class)]
final class FlavorTest extends TestCase
{
    private Flavor $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new Flavor();
    }

    #[Test]
    public function getTitleInitiallyReturnsEmptyString(): void
    {
        self::assertSame('', $this->subject->getTitle());
    }

    #[Test]
    public function setTitleSetsTitle(): void
    {
        $title = 'Chocolate';

        $this->subject->setTitle($title);

        self::assertSame($title, $this->subject->getTitle());
    }
}
