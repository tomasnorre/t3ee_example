<?php
namespace TNM\T3eeExample\Tests\Functional\Domain\Repository;

use TNM\T3eeExample\Domain\Repository\TalkRepository;

/**
 * Class TalkRepositoryTest
 * @package TNM\T3eeExample\Tests\Functional\Domain\Repository
 */
class TalkRepositoryTest extends \TYPO3\CMS\Core\Tests\FunctionalTestCase {

	/**
	 * @var TalkRepository
	 */
	protected $talkRepository;

	/**
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManager
	 */
	protected $objectManager;

	/**
	 * SetUp
	 */
	public function setUp() {
		$this->testExtensionsToLoad = array(
			'typo3conf/ext/t3ee_example',
		);
		parent::setUp();
		$this->importDataSet(__DIR__ . '/Fixtures/tx_t3eeexample_domain_model_talk.xml');
		$this->importDataSet(__DIR__ . '/Fixtures/tx_t3eeexample_domain_model_speaker.xml');
		$this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		$this->talkRepository = $this->objectManager->get('TNM\\T3eeExample\\Domain\\Repository\\TalkRepository');

		/** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
		$querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
		$querySettings->setRespectStoragePage(FALSE);
		$this->talkRepository->setDefaultQuerySettings($querySettings);
	}

	/**
	 * Tears down the fixture
	 *
	 * @return void
	 */
	public function tearDown() {
		parent::tearDown();
	}

	/**
	 * @test
	 */
	public function findAllTest() {
		$expectedTalksArray = array(23,45);
		$actualTalksArray = array();

		$talks = $this->talkRepository->findAll();
		foreach ($talks as $talk) {
			$actualTalksArray[] = $talk->getUid();
		}

		$this->assertSame(
			$expectedTalksArray,
			$actualTalksArray
		);
	}

	/**
	 * @test
	 */
	public function findByUidTest() {
		$talkUid = 45;
		$talk = $this->talkRepository->findByUid($talkUid);

		$this->assertSame(
			$talkUid,
			$talk->getUid()
		);
	}


}