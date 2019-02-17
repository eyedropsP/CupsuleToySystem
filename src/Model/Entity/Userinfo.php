<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Userinfo extends Entity
{
    protected $_accessible = [
        'userId' => true,
        'username' => true,
        'password' => true,
        'userStone' => true
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
