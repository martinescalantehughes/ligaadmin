<?php
App::uses('Departamento', 'Model');

/**
 * Departamento Test Case
 *
 */
class DepartamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.departamento',
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
		'app.localidade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Departamento = ClassRegistry::init('Departamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Departamento);

		parent::tearDown();
	}

}
