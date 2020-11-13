<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Detail $detail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detail'), ['action' => 'edit', $detail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detail'), ['action' => 'delete', $detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Details'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="details view large-9 medium-8 columns content">
    <h3><?= h($detail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Departament') ?></th>
            <td><?= h($detail->departament) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($detail->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Neighborhood') ?></th>
            <td><?= h($detail->neighborhood) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($detail->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($detail->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($detail->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institution') ?></th>
            <td><?= $detail->has('institution') ? $this->Html->link($detail->institution->name, ['controller' => 'Institutions', 'action' => 'view', $detail->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detail->id) ?></td>
        </tr>
    </table>
</div>
