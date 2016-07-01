<?php
App::uses('Paise', 'Model');

/**
 * Paise Test Case
 *
 */
class PaiseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paise',
		'app.jugadore',
		'app.persona',
		'app.dirigenteclub',
		'app.ligachaquenia',
		'app.personalliga',
		'app.personaltecnico',
		'app.planteltecnico',
		'app.plantel',
		'app.torneo',
		'app.fecha',
		'app.partido',
		'app.locale',
		'app.visitante',
		'app.club',
		'app.pase',
		'app.planteljugadore',
		'app.predio',
		'app.provincia',
		'app.departamento',
		'app.localidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paise = ClassRegistry::init('Paise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paise);

		parent::tearDown();
	}

}
