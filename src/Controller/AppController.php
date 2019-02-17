<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',[
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Userinfo',
                'action' => 'userpage'
            ],
            'logoutRedirect' => [
                'controller' => 'Userinfo',
                'action' => 'signin'
            ],
            'loginAction' => [
                'controller' => 'Userinfo',
                'action' => 'signin'
            ],
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Userinfo',
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ]
                ]
            ]
        ]);
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['userpage']);
    }
}
