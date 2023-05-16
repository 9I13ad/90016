<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donation Model
 *
 * @method \App\Model\Entity\Donation newEmptyEntity()
 * @method \App\Model\Entity\Donation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Donation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Donation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonationTable extends Table
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

        $this->setTable('donation');
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
            ->integer('AidItemID')
            ->allowEmptyString('AidItemID');

        return $validator;
    }
}
