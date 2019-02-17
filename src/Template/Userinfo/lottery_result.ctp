<?php echo $this->Html->css('CapsuleToySystem');?>
<div class="lottery form">
    <?= $this->Form->create()?>
    <fieldset>
    <?php if(!empty($cardResult)){ ?>
        <legend><?=__('ガチャ結果')?></legend>
        <p>石の数：<?= h($user['userStone']) ?> 個</p>
        <table>
            <tr>
                <th>CardName</th>
                <th>CardAttribute</th>
                <th>CardRarity</th>
            </tr>
            <tr>
                <td><?= h($cardResult[0]['cardName']) ?></td>
                <td><?= h($cardResult[0]['cardAttributeStr']) ?></td>
                <td><?= h($cardResult[0]['cardRarityStr']) ?></td>
            </tr>
        </table>
        <?= $this->Form->button(__('もう一度引く',['name' => 'again'])); ?>
        <?php }else{ ?>
            <h1>石が足りないよ課金してから出直してね</h1>
        <?php } ?>
        <br>
        <?= $this->Html->link('ガチャページ',['controller'=>'Userinfo','action'=>'lottery',$user['userNo']]);?>
        <br>
        <?= $this->Html->link('トップページ',['controller'=>'Userinfo','action'=>'userpage',$user['userNo']]); ?>
    </fieldset>
    <?= $this->Form->end()?>
</div>