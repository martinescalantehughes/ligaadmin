<?php
App::uses('Personaltecnico', 'Model');

/**
 * Personaltecnico Test Case
 *
 */
class PersonaltecnicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.pase',
		'app.tecnicopase',
		'app.planteljugadore',
		'app.planteltecnico',
		'app.locale',
		'app.visitante',
		'app.ligachaquenia',
		'app.dirigenteclub',
		'app.personalliga'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Personaltecnico = ClassRegistry::init('Personaltecnico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Personaltecnico);

		parent::tearDown();
	}

}
