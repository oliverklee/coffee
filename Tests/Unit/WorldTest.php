<?php

namespace OliverKlee\Coffee\Tests\Unit;

use PHPUnit\Framework\TestCase;

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
