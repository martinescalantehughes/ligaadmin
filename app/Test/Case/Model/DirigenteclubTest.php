<?php
App::uses('Dirigenteclub', 'Model');

/**
 * Dirigenteclub Test Case
 *
 */
class DirigenteclubTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.dirigentepase',
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
		$this->Dirigenteclub = ClassRegistry::init('Dirigenteclub');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dirigenteclub);

		parent::tearDown();
	}

}
