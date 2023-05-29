<?php

declare(strict_types=1);

namespace OliverKlee\Coffee\Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
final class WorldTest extends TestCase
{
    /**
     * @test
     */
    public function universeHasSpaceTimeContinuum(): void
    {
        self::assertSame(4, 2 + 2);
    }
}
