<?php
App::uses('Ligachaquenia', 'Model');

/**
 * Ligachaquenia Test Case
 *
 */
class LigachaqueniaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ligachaquenia',
		'app.dirigenteclub',
		'app.persona',
		'app.jugadore',
		'app.pase',
		'app.jugadores',
		'app.clubs',
		'app.planteljugadore',
		'app.plantel',
		'app.torneo',
		'app.club',
		'app.personalliga',
		'app.personas',
		'app.ligachaquenias',
		'app.personaltecnico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ligachaquenia = ClassRegistry::init('Ligachaquenia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ligachaquenia);

		parent::tearDown();
	}

}
