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
	 * Runs the php code in a shell, gathers the output and returns it.
	 *
	 * @return string $phpOutput
	 */
	public function phpContentOutput() {
		$outputString = exec('php -r "' . $this->phpContent . '"');
		$outputString = $this->phpContent;
		#\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($outputString);
		return $outputString;
	}

	/**
	 * Returns the phpContent
	 *
	 * @return string $phpContent
	 */
	public function getPhpContent() {
		$outputString = shell_exec('php -r "' . addslashes($this->phpContent) . '"');
		
		#foreach ($output as $tmp) {
		#		$outputString .= $tmp;
		#}
		
		#\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($tmp);
		return $outputString;
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
