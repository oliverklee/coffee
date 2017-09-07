<?php
namespace OliverKlee\Coffee\Tests\Unit;

/**
 * Test case.
 */
class WorldTest extends \Nimut\TestingFramework\TestCase\UnitTestCase
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
