<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donoridentitydocument Model
 *
 * @method \App\Model\Entity\Donoridentitydocument newEmptyEntity()
 * @method \App\Model\Entity\Donoridentitydocument newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Donoridentitydocument[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donoridentitydocument get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donoridentitydocument findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Donoridentitydocument patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donoridentitydocument[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donoridentitydocument|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donoridentitydocument saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donoridentitydocument[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donoridentitydocument[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donoridentitydocument[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donoridentitydocument[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonoridentitydocumentTable extends Table
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

        $this->setTable('donoridentitydocument');
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
            ->integer('DonorID')
            ->allowEmptyString('DonorID');

        $validator
            ->scalar('DocumentType')
            ->maxLength('DocumentType', 255)
            ->allowEmptyString('DocumentType');

        $validator
            ->scalar('DocumentNumber')
            ->maxLength('DocumentNumber', 255)
            ->allowEmptyString('DocumentNumber');

        $validator
            ->date('ExpiryDate')
            ->allowEmptyDate('ExpiryDate');

        return $validator;
    }
}
