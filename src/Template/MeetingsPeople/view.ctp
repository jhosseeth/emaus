<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MeetingsPerson $meetingsPerson
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Meetings Person'), ['action' => 'edit', $meetingsPerson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Meetings Person'), ['action' => 'delete', $meetingsPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meetingsPerson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Meetings People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meetings Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="meetingsPeople view large-9 medium-8 columns content">
    <h3><?= h($meetingsPerson->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Meeting') ?></th>
            <td><?= $meetingsPerson->has('meeting') ? $this->Html->link($meetingsPerson->meeting->id, ['controller' => 'Meetings', 'action' => 'view', $meetingsPerson->meeting->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $meetingsPerson->has('person') ? $this->Html->link($meetingsPerson->person->name, ['controller' => 'People', 'action' => 'view', $meetingsPerson->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($meetingsPerson->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reason') ?></th>
            <td><?= $this->Number->format($meetingsPerson->reason) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($meetingsPerson->description)); ?>
    </div>
</div>
