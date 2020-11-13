<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $person->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="people form large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('lastname');
            echo $this->Form->control('birthday', ['empty' => true]);
            echo $this->Form->control('city');
            echo $this->Form->control('neighborhood');
            echo $this->Form->control('address');
            echo $this->Form->control('telephone');
            echo $this->Form->control('cellphone');
            echo $this->Form->control('photo');
            echo $this->Form->control('member');
            echo $this->Form->control('institutions._ids', ['options' => $institutions]);
            echo $this->Form->control('meetings._ids', ['options' => $meetings]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
