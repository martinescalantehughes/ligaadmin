<?php
App::uses('Planteljugadore', 'Model');

/**
 * Planteljugadore Test Case
 *
 */
class PlanteljugadoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.planteljugadore',
		'app.plantel',
		'app.torneo',
		'app.club',
		'app.pase',
		'app.jugadore',
		'app.persona',
		'app.dirigenteclub',
		'app.ligachaquenia',
		'app.personalliga',
		'app.personaltecnico',
		'app.planteltecnico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Planteljugadore = ClassRegistry::init('Planteljugadore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Planteljugadore);

		parent::tearDown();
	}

}
