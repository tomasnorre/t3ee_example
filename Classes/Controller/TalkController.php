<?php
namespace TNM\T3eeExample\Controller;

use TNM\T3eeExample\Domain\Repository\TalkRepository;

/**
 * Class TalkController
 * @package TNM\T3eeExample\Controller
 */
class TalkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var TalkRepository
	 */
	protected $talkRepository;

	/**
	 * List action
	 */
	public function listAction() {
		$talks = $this->talkRepository->findAll();
		$this->view->assign('talks', $talks);
	}
}