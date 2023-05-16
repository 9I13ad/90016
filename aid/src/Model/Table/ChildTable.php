<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Child Model
 *
 * @method \App\Model\Entity\Child newEmptyEntity()
 * @method \App\Model\Entity\Child newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Child[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Child get($primaryKey, $options = [])
 * @method \App\Model\Entity\Child findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Child patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Child[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Child|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Child saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Child[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Child[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Child[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Child[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ChildTable extends Table
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

        $this->setTable('child');
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
            ->scalar('Name')
            ->maxLength('Name', 255)
            ->allowEmptyString('Name');

        $validator
            ->integer('Age')
            ->allowEmptyString('Age');

        return $validator;
    }
}
