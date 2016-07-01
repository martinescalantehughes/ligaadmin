<?php
App::uses('Jugadore', 'Model');

/**
 * Jugadore Test Case
 *
 */
class JugadoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jugadore',
		'app.paise',
		'app.persona',
		'app.provincia',
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
		$this->Jugadore = ClassRegistry::init('Jugadore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jugadore);

		parent::tearDown();
	}

}
