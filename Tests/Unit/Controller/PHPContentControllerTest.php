<?php
namespace PublicEnragement\PePagephpcontentelement\Tests\Unit\Controller;
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
 * Test case for class PublicEnragement\PePagephpcontentelement\Controller\PHPContentController.
 *
 * @author Danny Faak <hello@public-enrage.me>
 */
class PHPContentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \PublicEnragement\PePagephpcontentelement\Controller\PHPContentController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('PublicEnragement\\PePagephpcontentelement\\Controller\\PHPContentController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllPHPContentsFromRepositoryAndAssignsThemToView() {

		$allPHPContents = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$pHPContentRepository = $this->getMock('PublicEnragement\\PePagephpcontentelement\\Domain\\Repository\\PHPContentRepository', array('findAll'), array(), '', FALSE);
		$pHPContentRepository->expects($this->once())->method('findAll')->will($this->returnValue($allPHPContents));
		$this->inject($this->subject, 'pHPContentRepository', $pHPContentRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('pHPContents', $allPHPContents);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenPHPContentToView() {
		$pHPContent = new \PublicEnragement\PePagephpcontentelement\Domain\Model\PHPContent();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('pHPContent', $pHPContent);

		$this->subject->showAction($pHPContent);
	}
}
