<?php
App::uses('Importdatafile', 'Model');

/**
 * Importdatafile Test Case
 *
 */
class ImportdatafileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.importdatafile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Importdatafile = ClassRegistry::init('Importdatafile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Importdatafile);

		parent::tearDown();
	}

}
