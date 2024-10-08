<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

use OliverKlee\Coffee\Domain\Model\Flavor;
use PHPUnit\Framework\TestCase;

#[\PHPUnit\Framework\Attributes\CoversClass(\OliverKlee\Coffee\Domain\Model\Flavor::class)]
final class FlavorTest extends TestCase
{
    private Flavor $subject;

    #[\Override]
    protected function setUp(): void
    {
        $this->subject = new Flavor();
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function getTitleInitiallyReturnsEmptyString(): void
    {
        self::assertSame('', $this->subject->getTitle());
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function setTitleSetsTitle(): void
    {
        $title = 'Chocolate';

        $this->subject->setTitle($title);

        self::assertSame($title, $this->subject->getTitle());
    }
}
