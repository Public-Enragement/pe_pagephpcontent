<?php

namespace PublicEnragement\PePagephpcontentelement\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Danny Faak <hello@public-enrage.me>, Public Enragement
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \PublicEnragement\PePagephpcontentelement\Domain\Model\PHPContent.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Danny Faak <hello@public-enrage.me>
 */
class PHPContentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \PublicEnragement\PePagephpcontentelement\Domain\Model\PHPContent
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \PublicEnragement\PePagephpcontentelement\Domain\Model\PHPContent();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhpContentReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhpContent()
		);
	}

	/**
	 * @test
	 */
	public function setPhpContentForStringSetsPhpContent() {
		$this->subject->setPhpContent('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phpContent',
			$this->subject
		);
	}
}
