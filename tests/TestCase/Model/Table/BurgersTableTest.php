<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BurgersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BurgersTable Test Case
 */
class BurgersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BurgersTable
     */
    protected $Burgers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Burgers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Burgers') ? [] : ['className' => BurgersTable::class];
        $this->Burgers = TableRegistry::getTableLocator()->get('Burgers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Burgers);

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
}
