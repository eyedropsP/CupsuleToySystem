<?php echo $this->Html->css('CapsuleToySystem');?>
<div class="lottery form">
    <?= $this->Form->create('Userinfo',['url' => ['action' => 'lottery_result']])?>
    <fieldset>
        <legend><?=__('ガチャ')?></legend>
        <p>石の数：<?= h($user['userStone']) ?> 個　　300個で1回ガチャ</p>
        <p><?= $this->Form->button(__('引く'),['style' => 'position:absolute; left:20px; top:160px']);?></p>
        <br><br><br>
        <?= $this->Html->link('トップページ',['controller'=>'Userinfo','action'=>'userpage',$user['userNo']]); ?>
    </fieldset>
    <?= $this->Form->end()?>
</div>