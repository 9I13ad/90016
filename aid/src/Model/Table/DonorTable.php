<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Donor Model
 *
 * @method \App\Model\Entity\Donor newEmptyEntity()
 * @method \App\Model\Entity\Donor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Donor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Donor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Donor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Donor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Donor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Donor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Donor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Donor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DonorTable extends Table
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

        $this->setTable('donor');
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
            ->scalar('Name')
            ->maxLength('Name', 255)
            ->allowEmptyString('Name');

        $validator
            ->integer('Age')
            ->allowEmptyString('Age');

        $validator
            ->scalar('MailingAddress')
            ->maxLength('MailingAddress', 255)
            ->allowEmptyString('MailingAddress');

        $validator
            ->scalar('PhoneNumber')
            ->maxLength('PhoneNumber', 20)
            ->allowEmptyString('PhoneNumber');

        $validator
            ->scalar('Email')
            ->maxLength('Email', 255)
            ->allowEmptyString('Email');

        $validator
            ->scalar('PreferredModeOfCommunication')
            ->maxLength('PreferredModeOfCommunication', 255)
            ->allowEmptyString('PreferredModeOfCommunication');

        $validator
            ->scalar('Nationality')
            ->maxLength('Nationality', 255)
            ->allowEmptyString('Nationality');

        $validator
            ->scalar('ABN')
            ->maxLength('ABN', 255)
            ->allowEmptyString('ABN');

        return $validator;
    }
}
