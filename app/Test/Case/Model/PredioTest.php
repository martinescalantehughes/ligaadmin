<?php
App::uses('Predio', 'Model');

/**
 * Predio Test Case
 *
 */
class PredioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.predio',
		'app.paise',
		'app.provincia',
		'app.departamento',
		'app.localidade',
		'app.partido',
		'app.fecha',
		'app.torneo',
		'app.plantel',
		'app.club',
		'app.pase',
		'app.jugadore',
		'app.persona',
		'app.dirigenteclub',
		'app.ligachaquenia',
		'app.personalliga',
		'app.personaltecnico',
		'app.planteltecnico',
		'app.planteljugadore',
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
		$this->Predio = ClassRegistry::init('Predio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Predio);

		parent::tearDown();
	}

}
