<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usercard Model
 *
 * @method \App\Model\Entity\Usercard get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usercard newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usercard[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usercard|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usercard|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usercard patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usercard[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usercard findOrCreate($search, callable $callback = null, $options = [])
 */
class UsercardTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('usercard');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('userNo')
            ->allowEmptyString('userNo');

        $validator
            ->integer('cardNo')
            ->allowEmptyString('cardNo');

        return $validator;
    }
}
