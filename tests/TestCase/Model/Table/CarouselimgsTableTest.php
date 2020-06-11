<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarouselimgsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarouselimgsTable Test Case
 */
class CarouselimgsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarouselimgsTable
     */
    protected $Carouselimgs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Carouselimgs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Carouselimgs') ? [] : ['className' => CarouselimgsTable::class];
        $this->Carouselimgs = TableRegistry::getTableLocator()->get('Carouselimgs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Carouselimgs);

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
