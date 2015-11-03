<?php
namespace TNM\T3eeExample\Controller;

/**
 * Class TalkController
 * @package TNM\T3eeExample\Controller
 */
class TalkController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \TNM\T3eeExample\Domain\Repository\TalkRepository
	 * @inject
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