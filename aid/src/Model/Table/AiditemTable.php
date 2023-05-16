<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aiditem Model
 *
 * @method \App\Model\Entity\Aiditem newEmptyEntity()
 * @method \App\Model\Entity\Aiditem newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aiditem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aiditem get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aiditem findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aiditem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aiditem[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aiditem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aiditem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aiditem[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aiditem[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aiditem[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aiditem[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AiditemTable extends Table
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

        $this->setTable('aiditem');
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
            ->scalar('ItemName')
            ->maxLength('ItemName', 255)
            ->allowEmptyString('ItemName');

        $validator
            ->integer('CategoryID')
            ->allowEmptyString('CategoryID');

        $validator
            ->integer('Quantity')
            ->allowEmptyString('Quantity');

        $validator
            ->date('ExpiryDate')
            ->allowEmptyDate('ExpiryDate');

        $validator
            ->scalar('Ingredients')
            ->maxLength('Ingredients', 255)
            ->allowEmptyString('Ingredients');

        $validator
            ->scalar('AllergenInfo')
            ->maxLength('AllergenInfo', 255)
            ->allowEmptyString('AllergenInfo');

        $validator
            ->scalar('ManufacturerBrand')
            ->maxLength('ManufacturerBrand', 255)
            ->allowEmptyString('ManufacturerBrand');

        $validator
            ->scalar('ClothingSize')
            ->maxLength('ClothingSize', 255)
            ->allowEmptyString('ClothingSize');

        $validator
            ->integer('AidKitID')
            ->allowEmptyString('AidKitID');

        return $validator;
    }
}
