<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardinfo $cardinfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cardinfo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cardinfo form large-9 medium-8 columns content">
    <?= $this->Form->create($cardinfo) ?>
    <fieldset>
        <legend><?= __('Add Cardinfo') ?></legend>
        <?php
            echo $this->Form->control('cardName');
            echo $this->Form->control('cardAttribute');
            echo $this->Form->control('cardRarity');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
