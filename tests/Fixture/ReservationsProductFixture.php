<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservationsProductFixture
 */
class ReservationsProductFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'reservations_product';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'product_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quantity' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'reservation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'product_id' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'reservation_id' => ['type' => 'index', 'columns' => ['reservation_id'], 'length' => []],
        ],
        '_constraints' => [
            'reservations_product_ibfk_1' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'reservations_product_ibfk_2' => ['type' => 'foreign', 'columns' => ['reservation_id'], 'references' => ['reservations', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'product_id' => 1,
                'quantity' => 1,
                'reservation_id' => 1,
            ],
        ];
        parent::init();
    }
}
