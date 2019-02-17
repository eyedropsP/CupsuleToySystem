<?php echo $this->Html->css('CapsuleToySystem');?>
<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?=__('ユーザー名とパスワードを入力してください') ?></legend>
        <?= $this->Form->control('username',['label'=>'Username','style'=>'width:200px'])?>
        <?= $this->Form->control('password',['type'=>'password','label'=>'Password','style'=>'width:200px'])?>
    </fieldset>
<?= $this->Html->link(__('ログイン'),['action'=>'signin']); ?>
<?= $this->Form->button(__('新規登録'));?>
<?= $this->Form->end()?>
</div>