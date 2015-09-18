<?php

namespace TomasNorre\T3ee\Tests\Unit;

use TYPO3\CMS\Core\Tests\UnitTestCase;
use TomasNorre\T3ee\TempClass;

/**
 * Class FirstClassTest
 * @package TomasNorre\T3ee\Tests\Unit
 */
class FirstClassTest extends UnitTestCase {

	/**
	 * @test
	 */
	public function methodReturnsTrue() {
		$tempClassObject = new TempClass();
		$this->assertTrue($tempClassObject->returnsTrue());
	}

}