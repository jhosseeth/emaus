<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Meeting $meeting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="meetings form large-9 medium-8 columns content">
    <?= $this->Form->create($meeting) ?>
    <fieldset>
        <legend><?= __('Add Meeting') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('date');
            echo $this->Form->control('time');
            echo $this->Form->control('place');
            echo $this->Form->control('description');
            echo $this->Form->control('institution_id', ['type' => 'select']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
