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
    #[Test]
    public function getTitleReturnsTitleSetInConstruction(): void
    {
        $title = 'Chocolate';

        $subject = new Flavor($title);

        self::assertSame($title, $subject->getTitle());
    }

    #[Test]
    public function providingEmptyTitleInConstructorThrowsException(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Title must not be empty.');
        $this->expectExceptionCode(1728990117);

        new Flavor('');
    }
}
