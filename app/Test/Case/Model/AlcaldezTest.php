<?php
App::uses('Alcaldez', 'Model');

/**
 * Alcaldez Test Case
 */
class AlcaldezTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alcaldez'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alcaldez = ClassRegistry::init('Alcaldez');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alcaldez);

		parent::tearDown();
	}

}
