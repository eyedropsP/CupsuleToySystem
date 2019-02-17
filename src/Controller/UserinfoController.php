<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

class UserinfoController extends AppController
{
    public $name = 'Userinfo';
    public $components = array('Response');

    
    public function initialize(){
        parent::initialize();
        $this->Cardinfo = TableRegistry::get("cardinfo");
        $this->Usercard = TableRegistry::get("usercard");
        $this->Userinfo = TableRegistry::get('userinfo');
    }

    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow(['signup','signout']);
    }

    public function signup()
    {
        //ユーザーIDを生成
        $userId = $this->Response->makeRandStr(20);
        //課金石を設定
        $userStone = 0;

        $user = $this->Userinfo->newEntity();
        if ($this->request->is('post')) {
            //ユーザー名とパスワードをエンティティにセット
            $user = $this->Userinfo->patchEntity($user, $this->request->data);
            //ユーザーIDをセット
            $user->set('userId',$userId);
            //課金石をセット
            $user->set('userStone',$userStone);
            //DBに登録
            if ($this->Userinfo->save($user)) {
                $this->Flash->success(__('登録完了'));
                return $this->redirect(['action' => 'signup']);
            }
            $this->Flash->error(__('登録失敗'));
        }
        $this->set('user', $user);
    }

    public function signin()
    {
        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->SetUser($user);
                return $this->redirect(
                    [
                        'controller'=>'Userinfo',
                        'action'=>'userpage',
                        $user['userNo']
                    ]);
            }
            $this->Flash->error(__('ユーザー名かパスワードが違います'));
        }
    }

    public function signout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function userpage($userId)
    {
        $user = $this->Userinfo->get($userId);

        if(isset($this->request->data['kakin'])){
            $nowStone = $user->userStone;
            $nowStone += 3000;
            $user->userStone = $nowStone;
            $this->Userinfo->save($user);
        }
        
        $this->set(compact('user'));
    }


    public function lottery(){
        $user = $this->Auth->user();
        $userinfo = $this->Userinfo->get($user['userNo']);
        $this->set('user',$userinfo);
    }

    public function lotteryResult(){
        $user = $this->Auth->user();
        $userinfo = $this->Userinfo->get($user['userNo']);

        $cardResult = [];

        if($userinfo->userStone >= 300){
            //レア度で重みづけ
            $weightList = [
                '4' => 5,
                '3' => 10,
                '2' => 15,
                '1' => 80,
            ];

            $rarityResult = 0;

            //1~100までで一つをランダムに取ってくる
            $rarityResultnum = random_int(1,array_sum($weightList));

            $totalWeight = 0;

            //レア度で抽選
            foreach($weightList as $name => $weight){
                $totalWeight += $weight;
                if($rarityResultnum <= $totalWeight){
                    $rarityResult = $name;
                    break;
                }
            }

            //当たったレア度のカード情報を取得
            $card = $this->Cardinfo->find()
                ->where(['cardRarity' => $rarityResult])
                ->all()
                ->toArray();
            $cardnum = $this->Cardinfo->find()
                ->where(['cardRarity' => $rarityResult])
                ->all()
                ->count();

            //当たったレア度のカードの中から一つを選ぶ
            $cardResultNo = random_int(0,$cardnum - 1);

            $cardResult[] = $card[$cardResultNo];

            //登録するデータ
            $article = $this->Usercard->newEntity();
            $article->userNo = $user['userNo'];
            $article->cardNo = $cardResult[0]['cardNo'];
            //ユーザーの所持カードに当たったカードを登録
            $this->Usercard->save($article);

            //石消費
            $userinfo->userStone -= 300;
            $this->Userinfo->save($userinfo);
        }
        
        if(isset($this->request->data['again'])){
            return $this->redirect(['action' => 'lotteryResult']);
        }
        $this->set('cardResult',$cardResult);
        $this->set('user',$userinfo);

    }

    public function isAuthorized($user) 
    {
        return true;
    }   
}
