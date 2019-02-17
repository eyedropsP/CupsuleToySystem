<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardinfo $cardinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cardinfo'), ['action' => 'edit', $cardinfo->cardNo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cardinfo'), ['action' => 'delete', $cardinfo->cardNo], ['confirm' => __('Are you sure you want to delete # {0}?', $cardinfo->cardNo)]) ?> </li>
        <li><?= $this->Html->link(__('List Cardinfo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cardinfo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cardinfo view large-9 medium-8 columns content">
    <h3><?= h($cardinfo->cardNo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CardName') ?></th>
            <td><?= h($cardinfo->cardName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CardNo') ?></th>
            <td><?= $this->Number->format($cardinfo->cardNo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CardAttribute') ?></th>
            <td><?= $this->Number->format($cardinfo->cardAttribute) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CardRarity') ?></th>
            <td><?= $this->Number->format($cardinfo->cardRarity) ?></td>
        </tr>
    </table>
</div>
