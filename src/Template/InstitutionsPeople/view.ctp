<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InstitutionsPerson $institutionsPerson
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Institutions Person'), ['action' => 'edit', $institutionsPerson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Institutions Person'), ['action' => 'delete', $institutionsPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institutionsPerson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Institutions People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Institutions Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="institutionsPeople view large-9 medium-8 columns content">
    <h3><?= h($institutionsPerson->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $institutionsPerson->has('person') ? $this->Html->link($institutionsPerson->person->name, ['controller' => 'People', 'action' => 'view', $institutionsPerson->person->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institution') ?></th>
            <td><?= $institutionsPerson->has('institution') ? $this->Html->link($institutionsPerson->institution->name, ['controller' => 'Institutions', 'action' => 'view', $institutionsPerson->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($institutionsPerson->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($institutionsPerson->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($institutionsPerson->end) ?></td>
        </tr>
    </table>
</div>
