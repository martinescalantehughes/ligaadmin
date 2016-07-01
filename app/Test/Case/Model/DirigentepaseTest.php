<?php
App::uses('Dirigentepase', 'Model');

/**
 * Dirigentepase Test Case
 *
 */
class DirigentepaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dirigentepase',
		'app.dirigenteclub',
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
		'app.tecnicopase',
		'app.planteljugadore',
		'app.planteltecnico',
		'app.personaltecnico',
		'app.ligachaquenia',
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
		$this->Dirigentepase = ClassRegistry::init('Dirigentepase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dirigentepase);

		parent::tearDown();
	}

}
