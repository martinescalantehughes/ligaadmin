<?php
App::uses('PersonaltecnicosPlantel', 'Model');

/**
 * PersonaltecnicosPlantel Test Case
 *
 */
class PersonaltecnicosPlantelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.personaltecnicos_plantel',
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
		'app.locale',
		'app.visitante',
		'app.jugadores_plantel',
		'app.plantels_torneo',
		'app.ligachaquenia',
		'app.dirigenteclub',
		'app.dirigentepase',
		'app.club',
		'app.pase',
		'app.tecnicopase',
		'app.personalliga',
		'app.planteljugadore',
		'app.planteltecnico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PersonaltecnicosPlantel = ClassRegistry::init('PersonaltecnicosPlantel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PersonaltecnicosPlantel);

		parent::tearDown();
	}

}
