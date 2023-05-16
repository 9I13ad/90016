<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recipient Model
 *
 * @method \App\Model\Entity\Recipient newEmptyEntity()
 * @method \App\Model\Entity\Recipient newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Recipient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recipient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recipient findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Recipient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recipient[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recipient|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recipient saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recipient[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Recipient[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Recipient[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Recipient[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RecipientTable extends Table
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

        $this->setTable('recipient');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('Age')
            ->requirePresence('Age', 'create')
            ->notEmptyString('Age');

        $validator
            ->scalar('PreviousAddress')
            ->maxLength('PreviousAddress', 256)
            ->requirePresence('PreviousAddress', 'create')
            ->notEmptyString('PreviousAddress');

        $validator
            ->integer('TotalFamilyMembers')
            ->requirePresence('TotalFamilyMembers', 'create')
            ->notEmptyString('TotalFamilyMembers');

        $validator
            ->scalar('Nationality')
            ->maxLength('Nationality', 30)
            ->requirePresence('Nationality', 'create')
            ->notEmptyString('Nationality');

        return $validator;
    }
}
