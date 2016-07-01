<?php
App::uses('Provincia', 'Model');

/**
 * Provincia Test Case
 *
 */
class ProvinciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provincia',
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
		$this->Provincia = ClassRegistry::init('Provincia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Provincia);

		parent::tearDown();
	}

}
