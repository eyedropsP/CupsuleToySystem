<?php echo $this->Html->css('CapsuleToySystem');?>
<div class="user form">
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?=__('ユーザーページ') ?></legend>
        <p><?= h($user->username) ?>さん、お帰りなさい</p>
        <p>石の数：<?= h($user->userStone) ?> 個</p>
        <?= $this->Form->button(__('課金'),['name' => 'kakin','style' => 'position:absolute; left:20px; top:190px','controller' => 'Userinfo','action' => 'userpage']) ?>
        <br><br>
        <?= $this->Html->link('ガチャ',['action' => 'lottery', $user->userNo]); ?>
        <br>
        <?= $this->Html->link("所持モンスター",['controller' => 'Usercard','action' => 'gallery']); ?>
        <br>
        <?= $this->Html->link("ログアウト",['action' => 'signout']); ?>
    </fieldset>
<?= $this->Form->end()?>
</div>



