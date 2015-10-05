<?php
namespace PublicEnragement\PePagephpcontentelement\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Danny Faak <hello@public-enrage.me>, Public Enragement
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * PHPContent
 */
class PHPContent extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * phpContent
	 *
	 * @var string
	 */
	public $phpContent = '';

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the phpContent via eval
	 *
	 * @return string $outputString
	 */
	public function returnPhpContentParsed() {
		ob_start();
		eval("?" . chr(62) . $this->phpContent . chr(60) . "?");
		$outputString = ob_get_contents();
		ob_end_clean();
		return $outputString;
	}

	/**
	 * Returns the phpContent
	 *
	 * @return string $phpContent
	 */
	public function getPhpContent() {
		#return $this->returnPhpContentShell();
		return $this->returnPhpContentParsed();
	}

	/**
	 * Sets the phpContent
	 *
	 * @param string $phpContent
	 * @return void
	 */
	public function setPhpContent($phpContent) {
		$this->phpContent = $phpContent;
	}

}
