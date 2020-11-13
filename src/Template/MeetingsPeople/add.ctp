<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MeetingsPerson $meetingsPerson
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Meetings People'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="meetingsPeople form large-9 medium-8 columns content">
    <?= $this->Form->create($meetingsPerson) ?>
    <fieldset>
        <legend><?= __('Add Meetings Person') ?></legend>
        <?php
            echo $this->Form->control('assistance', ['type' => 'text']);
            echo $this->Form->control('reason');
            echo $this->Form->control('description');
            echo $this->Form->control('meeting_id');
            echo $this->Form->control('person_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
