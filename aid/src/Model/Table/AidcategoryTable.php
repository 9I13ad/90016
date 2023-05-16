<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aidcategory Model
 *
 * @method \App\Model\Entity\Aidcategory newEmptyEntity()
 * @method \App\Model\Entity\Aidcategory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aidcategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aidcategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aidcategory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aidcategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aidcategory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aidcategory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aidcategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aidcategory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidcategory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidcategory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidcategory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AidcategoryTable extends Table
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

        $this->setTable('aidcategory');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->scalar('CategoryName')
            ->maxLength('CategoryName', 255)
            ->allowEmptyString('CategoryName');

        $validator
            ->scalar('InventoryStatus')
            ->maxLength('InventoryStatus', 255)
            ->allowEmptyString('InventoryStatus');

        return $validator;
    }
}
