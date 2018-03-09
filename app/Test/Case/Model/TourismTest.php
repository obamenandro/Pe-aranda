<?php
App::uses('Tourism', 'Model');

/**
 * Tourism Test Case
 */
class TourismTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tourism'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tourism = ClassRegistry::init('Tourism');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tourism);

		parent::tearDown();
	}

}
