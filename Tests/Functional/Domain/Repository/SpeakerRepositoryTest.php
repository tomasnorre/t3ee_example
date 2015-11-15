<?php

namespace TNM\T3eeExample\Tests\Functional\Domain\Repository;

use TNM\T3eeExample\Domain\Model\Speaker;
use TNM\T3eeExample\Domain\Repository\SpeakerRepository;

/**
 * Class SpeakerRepositoryTest.
 */
class SpeakerRepositoryTest extends \TYPO3\CMS\Core\Tests\FunctionalTestCase
{
    /**
     * @var SpeakerRepository
     */
    protected $speakerRepository;

    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManager
     */
    protected $objectManager;

    /**
     * SetUp.
     */
    public function setUp()
    {
        $this->testExtensionsToLoad = array(
            'typo3conf/ext/t3ee_example',
        );
        parent::setUp();
        $this->importDataSet(__DIR__.'/Fixtures/tx_t3eeexample_domain_model_talk.xml');
        $this->importDataSet(__DIR__.'/Fixtures/tx_t3eeexample_domain_model_speaker.xml');
        $this->objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $this->speakerRepository = $this->objectManager->get('TNM\\T3eeExample\\Domain\\Repository\\SpeakerRepository');

        /** @var $querySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        $querySettings->setRespectStoragePage(false);
        $this->speakerRepository->setDefaultQuerySettings($querySettings);
    }

    /**
     * Tears down the fixture.
     */
    public function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function findAllTest()
    {
        $expectedSpeakersArray = array(1,2);
        $actualSpeakersArray = array();

        $speakers = $this->speakerRepository->findAll();

        /** @var Speaker $speaker */
        foreach ($speakers as $speaker) {
            $actualSpeakersArray[] = $speaker->getUid();
        }

        $this->assertSame(
            $expectedSpeakersArray,
            $actualSpeakersArray
        );
    }
}
