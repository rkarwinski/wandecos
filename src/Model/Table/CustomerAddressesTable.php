<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerAddresses Model
 *
 * @method \App\Model\Entity\CustomerAddress newEmptyEntity()
 * @method \App\Model\Entity\CustomerAddress newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerAddress[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerAddress get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerAddress findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CustomerAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerAddress[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerAddress|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerAddress saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerAddress[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomerAddress[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomerAddress[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomerAddress[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CustomerAddressesTable extends Table
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

        $this->setTable('customer_addresses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('id_customer')
            ->requirePresence('id_customer', 'create')
            ->notEmptyString('id_customer');

        $validator
            ->scalar('city')
            ->maxLength('city', 100)
            ->allowEmptyString('city');

        $validator
            ->integer('number')
            ->allowEmptyString('number');

        $validator
            ->scalar('street')
            ->maxLength('street', 100)
            ->allowEmptyString('street');

        $validator
            ->scalar('zip_code')
            ->maxLength('zip_code', 20)
            ->allowEmptyString('zip_code');

        $validator
            ->scalar('complement')
            ->maxLength('complement', 100)
            ->allowEmptyString('complement');

        return $validator;
    }
}
