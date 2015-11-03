<?php
namespace TNM\T3eeExample\Domain\Repository;

/**
 * Class SpeakerRepository
 * @package TNM\T3eeExample\Domain\Repository
 */
class SpeakerRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * Initializes the repository.
	 *
	 * @return void
	 */
	public function initializeObject() {
		/** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
		$querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
		$querySettings->setRespectStoragePage(FALSE);
		$this->setDefaultQuerySettings($querySettings);
	}
}