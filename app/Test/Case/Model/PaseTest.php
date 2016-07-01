<?php
App::uses('Pase', 'Model');

/**
 * Pase Test Case
 *
 */
class PaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pase',
		'app.jugadore',
		'app.persona',
		'app.ligachaquenia',
		'app.dirigenteclub',
		'app.personalliga',
		'app.personas',
		'app.ligachaquenias',
		'app.personaltecnico',
		'app.planteljugadore',
		'app.plantel',
		'app.torneo',
		'app.club'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pase = ClassRegistry::init('Pase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pase);

		parent::tearDown();
	}

}
