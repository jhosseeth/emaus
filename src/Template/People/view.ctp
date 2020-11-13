<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meetings'), ['controller' => 'Meetings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meeting'), ['controller' => 'Meetings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="people view large-9 medium-8 columns content">
    <h3><?= h($person->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($person->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($person->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($person->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Neighborhood') ?></th>
            <td><?= h($person->neighborhood) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($person->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($person->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cellphone') ?></th>
            <td><?= h($person->cellphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($person->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Member') ?></th>
            <td><?= $this->Number->format($person->member) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($person->birthday) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Institutions') ?></h4>
        <?php if (!empty($person->institutions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->institutions as $institutions): ?>
            <tr>
                <td><?= h($institutions->id) ?></td>
                <td><?= h($institutions->name) ?></td>
                <td><?= h($institutions->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Institutions', 'action' => 'view', $institutions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Institutions', 'action' => 'edit', $institutions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Institutions', 'action' => 'delete', $institutions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institutions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Meetings') ?></h4>
        <?php if (!empty($person->meetings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Place') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Institution Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->meetings as $meetings): ?>
            <tr>
                <td><?= h($meetings->id) ?></td>
                <td><?= h($meetings->type) ?></td>
                <td><?= h($meetings->date) ?></td>
                <td><?= h($meetings->time) ?></td>
                <td><?= h($meetings->place) ?></td>
                <td><?= h($meetings->description) ?></td>
                <td><?= h($meetings->institution_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Meetings', 'action' => 'view', $meetings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Meetings', 'action' => 'edit', $meetings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Meetings', 'action' => 'delete', $meetings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meetings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
