<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VdosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VdosTable Test Case
 */
class VdosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VdosTable
     */
    public $Vdos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vdos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vdos') ? [] : ['className' => VdosTable::class];
        $this->Vdos = TableRegistry::get('Vdos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vdos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
