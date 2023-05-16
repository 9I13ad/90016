<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aidkit Model
 *
 * @method \App\Model\Entity\Aidkit newEmptyEntity()
 * @method \App\Model\Entity\Aidkit newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aidkit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aidkit get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aidkit findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aidkit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aidkit[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aidkit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aidkit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aidkit[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidkit[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidkit[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aidkit[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AidkitTable extends Table
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

        $this->setTable('aidkit');
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
            ->scalar('KitName')
            ->maxLength('KitName', 255)
            ->allowEmptyString('KitName');

        return $validator;
    }
}
