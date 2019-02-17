<?php echo $this->Html->css('CapsuleToySystem');?>
<div class="user form">
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?=__('User Card Gallery') ?></legend>
        <p><?= h($user['username']) ?>さんの所持カード</p>
        <table>
            <tr>
                <th>CardName</th>
                <th>CardAttribute</th>
                <th>CardRarity</th>
            </tr>
<?php if(!empty($usercard)){ ?>
<?php foreach ($usercard as $no): ?>
            <tr>
                <td><?= h($no->cardName) ?></td>
                <td><?= h($no->cardAttributeStr) ?></td>
                <td><?= h($no->cardRarityStr) ?></td>
            </tr>
<?php endforeach; ?>
<?php } ?>
        </table>
<?= $this->Html->link('トップページ',['controller'=>'Userinfo','action'=>'userpage', $user['userNo']]); ?>
    </fieldset>
<?= $this->Form->end() ?>
</div>