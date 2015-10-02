<?php
namespace PublicEnragement\PePagephpcontentelement\Controller;


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
 * PHPContentController
 */
class PHPContentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * pHPContentRepository
	 *
	 * @var \PublicEnragement\PePagephpcontentelement\Domain\Repository\PHPContentRepository
	 * @inject
	 */
	protected $pHPContentRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$pHPContents = $this->pHPContentRepository->findAll();
		$this->view->assign('pHPContents', $pHPContents);
	}

	/**
	 * action show
	 *
	 * @param \PublicEnragement\PePagephpcontentelement\Domain\Model\PHPContent $pHPContent
	 * @return void
	 */
	public function showAction(\PublicEnragement\PePagephpcontentelement\Domain\Model\PHPContent $pHPContent) {
		$this->view->assign('pHPContent', $pHPContent);
	}

	/**
	 * action
	 *
	 * @return void
	 */
	public function Action() {
		
	}

}
