<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cardinfo Model
 *
 * @method \App\Model\Entity\Cardinfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cardinfo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cardinfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cardinfo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cardinfo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cardinfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cardinfo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cardinfo findOrCreate($search, callable $callback = null, $options = [])
 */
class CardinfoTable extends Table
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

        $this->setTable('cardinfo');
        $this->setDisplayField('cardNo');
        $this->setPrimaryKey('cardNo');
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
            ->integer('cardNo')
            ->allowEmptyString('cardNo', 'create');

        $validator
            ->scalar('cardName')
            ->maxLength('cardName', 45)
            ->allowEmptyString('cardName');

        $validator
            ->integer('cardAttribute')
            ->allowEmptyString('cardAttribute');

        $validator
            ->scalar('cardAttributeStr')
            ->maxLength('cardAttributeStr',45)
            ->allowEmptyString('cardAttributeStr');

        $validator
            ->integer('cardRarity')
            ->allowEmptyString('cardRarity');

        $validator
            ->scalar('cardRarityStr')
            ->maxLength('cardRarityStr',45)
            ->allowEmptyString('cardRarityStr');

        return $validator;
    }
}
