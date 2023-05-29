<?php

namespace OliverKlee\Coffee\Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * @coversNothing
 */
class WorldTest extends TestCase
{
    /**
     * @test
     */
    public function universeHasSpaceTimeContinuum()
    {
        self::assertSame(
            4,
            2 + 2
        );
    }
}
