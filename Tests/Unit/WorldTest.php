<?php

namespace OliverKlee\Coffee\Tests\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Test case.
 */
class WorldTest extends TestCase
{
    /**
     * @var bool
     */
    protected $backupGlobals = false;

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
