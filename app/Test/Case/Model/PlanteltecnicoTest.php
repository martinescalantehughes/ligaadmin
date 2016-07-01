<?php
App::uses('Planteltecnico', 'Model');

/**
 * Planteltecnico Test Case
 *
 */
class PlanteltecnicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.planteltecnico',
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
		'app.planteljugadore',
		'app.partido',
		'app.fecha'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Planteltecnico = ClassRegistry::init('Planteltecnico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Planteltecnico);

		parent::tearDown();
	}

}
