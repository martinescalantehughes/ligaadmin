<?php
App::uses('Localidade', 'Model');

/**
 * Localidade Test Case
 *
 */
class LocalidadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.localidade',
		'app.departamento',
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
		'app.paise',
		'app.provincia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Localidade = ClassRegistry::init('Localidade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Localidade);

		parent::tearDown();
	}

}
