<?php echo $this->Html->css('CapsuleToySystem');?>
<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __("ユーザー名とパスワードを入力してください") ?></legend>
        <?= $this->Form->control('username',['label'=>'Username','style'=>'width:200px'])?>
        <?= $this->Form->control('password',['type'=>'password','label'=>'Password','style'=>'width:200px'])?>
    </fieldset>
<?= $this->Html->link(__('新規登録'),['action'=>'signup']); ?>
<?= $this->Form->button(__('ログイン')); ?>
<?= $this->Form->end() ?>
</div>