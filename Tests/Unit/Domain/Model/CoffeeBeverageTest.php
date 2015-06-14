<?php
namespace OliverKlee\Coffee\Tests\Unit\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class CoffeeBeverageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \OliverKlee\Coffee\Domain\Model\CoffeeBeverage
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \OliverKlee\Coffee\Domain\Model\CoffeeBeverage();
	}

	/**
	 * @test
	 */
	public function canBeInstantiated() {
		self::assertInstanceOf('OliverKlee\\Coffee\\Domain\\Model\\CoffeeBeverage', $this->subject);
	}
}