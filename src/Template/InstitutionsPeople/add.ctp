<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InstitutionsPerson $institutionsPerson
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Institutions People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="institutionsPeople form large-9 medium-8 columns content">
    <?= $this->Form->create($institutionsPerson) ?>
    <fieldset>
        <legend><?= __('Add Institutions Person') ?></legend>
        <?php
            echo $this->Form->control('start', ['type' => 'text']);
            echo $this->Form->control('end', ['empty' => true, 'type' => 'text']);
            echo $this->Form->control('person_id', ['type' => 'select']);
            echo $this->Form->control('institution_id', ['type' => 'select']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
