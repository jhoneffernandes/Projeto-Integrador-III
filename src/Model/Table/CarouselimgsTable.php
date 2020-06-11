<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carouselimgs Model
 *
 * @method \App\Model\Entity\Carouselimg newEmptyEntity()
 * @method \App\Model\Entity\Carouselimg newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Carouselimg[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carouselimg get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carouselimg findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Carouselimg patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carouselimg[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carouselimg|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carouselimg saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carouselimg[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carouselimg[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carouselimg[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carouselimg[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CarouselimgsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carouselimgs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('imgname')
            ->maxLength('imgname', 100)
            ->requirePresence('imgname', 'create')
            ->notEmptyString('imgname');

        return $validator;
    }
}
