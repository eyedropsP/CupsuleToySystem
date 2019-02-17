<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validator;

class UserinfoTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->requirePresence('userId',false)
            ->allowEmpty('userId')
            ->notEmpty('username','このフィールドに入力してください')
            ->add('username','unique',[
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message'=>'同じログイン名が既に登録されています',
            ])
            ->notEmpty('password','このフィールドに入力してください')
            ->allowEmpty('userStone');
    }

}
