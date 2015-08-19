<?php
namespace OliverKlee\Coffee\Tests\Unit;

class WorldTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @test
	 */
	public function universeHasSpaceTimeContinuum() {
		self::assertSame(
			4,
			2 + 2
		);
	}
}