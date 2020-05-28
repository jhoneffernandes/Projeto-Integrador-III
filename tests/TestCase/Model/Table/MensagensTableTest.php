<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MensagensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MensagensTable Test Case
 */
class MensagensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MensagensTable
     */
    protected $Mensagens;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Mensagens',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mensagens') ? [] : ['className' => MensagensTable::class];
        $this->Mensagens = TableRegistry::getTableLocator()->get('Mensagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Mensagens);

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
