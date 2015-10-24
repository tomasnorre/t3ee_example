<?php
namespace TNM\T3eeExample\Domain\Model;

/**
 * Class Speaker
 * @package TNM\T3eeExample\Domain\Model
 */
class Speaker extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * @var string
	 */
	protected $name = '';

	public function __construct($name) {
		$this->setName($name);
	}

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
}