<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aidrequisition Model
 *
 * @method \App\Model\Entity\Aidrequisition newEmptyEntity()
 * @method \App\Model\Entity\Aidrequisition newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aidrequisition[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aidrequisition get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aidrequisition findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aidrequisition patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aidrequisition[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aidrequisition|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aidrequisition saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aidrequisition[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidrequisition[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidrequisition[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidrequisition[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AidrequisitionTable extends Table
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

        $this->setTable('aidrequisition');
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
            ->integer('RecipientID')
            ->allowEmptyString('RecipientID');

        $validator
            ->integer('AidKitID')
            ->allowEmptyString('AidKitID');

        $validator
            ->integer('AidItemID')
            ->allowEmptyString('AidItemID');

        $validator
            ->integer('RequestedQuantity')
            ->allowEmptyString('RequestedQuantity');

        $validator
            ->scalar('Notes')
            ->allowEmptyString('Notes');

        return $validator;
    }
}
