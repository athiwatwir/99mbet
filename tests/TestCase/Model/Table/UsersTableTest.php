<?php
namespaceApp\Test\TestCase\Model\Table;useApp\Model\Table\UsersTable;useCake\ORM\TableRegistry;useCake\TestSuite\TestCase;
/**
 *App\Model\Table\UsersTable Test Case
 */
classUsersTableTest extendsTestCase
{
    /**
     *Test subject
     *
     * @var\App\Model\Table\UsersTable
     */
    public $Users;
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users'
    ];
    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();$config = TableRegistry::exists('Users') ? [] : ['className' => UsersTable::class];        $this->Users = TableRegistry::get('Users', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Users);

        parent::tearDown();
    }
    /**
     * Testinitialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
    /**
     * TestvalidationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
    /**
     * TestbuildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }}
