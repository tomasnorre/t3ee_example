<?php
namespace TNM\T3eeExample\Domain\Model;

/**
 * Class Talk
 * @package TNM\T3eeExample\Domain\Model
 */
class Talk extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * @var int
	 */
	protected $date = 0;

	/**
	 * @var \TNM\T3eeExample\Domain\Model\Speaker
	 */
	protected $speaker = NULL;

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @param int $date
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * @return \TNM\T3eeExample\Domain\Model\Speaker
	 */
	public function getSpeaker() {
		return $this->speaker;
	}

	/**
	 * @param \TNM\T3eeExample\Domain\Model\Speaker $speaker
	 */
	public function setSpeaker($speaker) {
		$this->speaker = $speaker;
	}
}