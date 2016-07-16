<?php
namespace OliverKlee\Coffee\Tests\Unit;

/**
 * Test case.
 */
class WorldTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
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
