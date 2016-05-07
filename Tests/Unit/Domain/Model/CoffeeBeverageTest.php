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
use OliverKlee\Coffee\Domain\Model\CoffeeBeverage;

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class CoffeeBeverageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var CoffeeBeverage
     */
    protected $subject = null;

    protected function setUp()
    {
        $this->subject = new CoffeeBeverage();
    }

    /**
     * @test
     */
    public function canBeInstantiated()
    {
        self::assertInstanceOf(CoffeeBeverage::class, $this->subject);
    }
}
