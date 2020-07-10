<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CartsTable Test Case
 */
class CartsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CartsTable
     */
    protected $Carts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Carts',
        'app.Clients',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Carts') ? [] : ['className' => CartsTable::class];
        $this->Carts = TableRegistry::getTableLocator()->get('Carts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Carts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
