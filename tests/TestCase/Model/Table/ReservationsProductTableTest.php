<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReservationsProductTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReservationsProductTable Test Case
 */
class ReservationsProductTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReservationsProductTable
     */
    protected $ReservationsProduct;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ReservationsProduct',
        'app.Products',
        'app.Reservations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ReservationsProduct') ? [] : ['className' => ReservationsProductTable::class];
        $this->ReservationsProduct = TableRegistry::getTableLocator()->get('ReservationsProduct', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ReservationsProduct);

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
