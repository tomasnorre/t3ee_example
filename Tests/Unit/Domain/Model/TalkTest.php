<?php

namespace TNM\T3eeExample\Tests\Unit\Domain\Model;

use TNM\T3eeExample\Domain\Model\Speaker;
use TNM\T3eeExample\Domain\Model\Talk;

/**
 * Class TalkTest.
 */
class TalkTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var Talk
     */
    protected $subject;

    /**
     */
    public function setUP()
    {
        $this->subject = new Talk();
    }

    /**
     * @test
     */
    public function getTalkNameReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function getDateTimeReturnsInitialValueForInteger()
    {
        $this->assertSame(
            0,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function getSpeakerReturnsInitialValueNull()
    {
        $this->assertNull($this->subject->getSpeaker());
    }

    /**
     * @test
     */
    public function setNameReturnsName()
    {
        $name = 'Default Talk';
        $this->subject->setName($name);

        $this->assertSame(
            $name,
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setDateReturnsDate()
    {
        $date = 1445538625;
        $this->subject->setDate($date);

        $this->assertSame(
            $date,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setSpeakerReturnsSpeaker()
    {
        $name = 'Tomas Norre Mikkelsen';
        $speaker = new Speaker($name);
        $this->subject->setSpeaker($speaker);

        $this->assertSame(
            $name,
            $this->subject->getSpeaker()->getName()
        );
    }
}
