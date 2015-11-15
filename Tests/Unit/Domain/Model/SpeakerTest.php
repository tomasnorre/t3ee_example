<?php

namespace TNM\T3eeExample\Tests\Unit\Domain\Model;

use TNM\T3eeExample\Domain\Model\Speaker;

/**
 * Class SpeakerTest.
 */
class SpeakerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var Speaker
     */
    protected $subject;

    /**
     */
    public function setUp()
    {
        $name = 'Homer Simpson';
        $this->subject = new Speaker($name);
    }

    /**
     * @test
     */
    public function getNameReturnsName()
    {
        $name = 'Bart Simpson';
        $this->subject->setName($name);

        $this->assertSame(
            $name,
            $this->subject->getName()
        );
    }
}
