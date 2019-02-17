<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardinfo[]|\Cake\Collection\CollectionInterface $cardinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cardinfo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cardinfo index large-9 medium-8 columns content">
    <h3><?= __('Cardinfo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cardNo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cardName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cardAttribute') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cardRarity') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cardinfo as $cardinfo): ?>
            <tr>
                <td><?= $this->Number->format($cardinfo->cardNo) ?></td>
                <td><?= h($cardinfo->cardName) ?></td>
                <td><?= $this->Number->format($cardinfo->cardAttribute) ?></td>
                <td><?= $this->Number->format($cardinfo->cardRarity) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cardinfo->cardNo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cardinfo->cardNo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cardinfo->cardNo], ['confirm' => __('Are you sure you want to delete # {0}?', $cardinfo->cardNo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
