<?php
App::uses('Tecnicopase', 'Model');

/**
 * Tecnicopase Test Case
 *
 */
class TecnicopaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tecnicopase',
		'app.personaltecnico',
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
		'app.dirigenteclub',
		'app.ligachaquenia',
		'app.personalliga',
		'app.pase',
		'app.planteljugadore',
		'app.planteltecnico',
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
		$this->Tecnicopase = ClassRegistry::init('Tecnicopase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tecnicopase);

		parent::tearDown();
	}

}
