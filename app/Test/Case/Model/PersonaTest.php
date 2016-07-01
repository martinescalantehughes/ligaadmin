<?php
App::uses('Persona', 'Model');

/**
 * Persona Test Case
 *
 */
class PersonaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.persona',
		'app.provincia',
		'app.paise',
		'app.jugadore',
		'app.departamento',
		'app.localidade',
		'app.predio',
		'app.partido',
		'app.fecha',
		'app.torneo',
		'app.plantel',
		'app.club',
		'app.pase',
		'app.planteljugadore',
		'app.planteltecnico',
		'app.personaltecnico',
		'app.ligachaquenia',
		'app.dirigenteclub',
		'app.personalliga',
		'app.locale',
		'app.visitante'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Persona = ClassRegistry::init('Persona');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Persona);

		parent::tearDown();
	}

}
