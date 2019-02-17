<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Usercard Controller
 *
 * @property \App\Model\Table\UsercardTable $Usercard
 *
 * @method \App\Model\Entity\Usercard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsercardController extends AppController
{
    public $components = array('Response');

    public function initialize(){
        parent::initialize();
        $this->Cardinfo = TableRegistry::get("cardinfo");
    }

    public function gallery()
    {
        $user = $this->Auth->user();

        $check = array('userNo' => $user['userNo']);

        if($this->Usercard->exists($check)){
            //ログイン中のユーザーナンバーを取得
            $array= $this->Usercard->find()
                ->where(['userNo' => $user['userNo']]);
            //所持カードの重複レコードを消す
            $usercard = $this->Response->getUniqueArray($array,'cardNo');
            //所持カードのカード情報を取得
            foreach($usercard as $cardno){
                $card[] = $this->Cardinfo->get($cardno['cardNo']);
            }

            $this->set('usercard',$card);
        }

        $this->set('user',$user);
    }

    public function isAuthorized($user) {
        return true;
    }
}