<?php
App::uses('Government', 'Model');

/**
 * Government Test Case
 */
class GovernmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.government'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Government = ClassRegistry::init('Government');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Government);

		parent::tearDown();
	}

}
