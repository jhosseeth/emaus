<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Meeting $meeting
 */
?>
<?php debug($meeting); ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Meeting'), ['action' => 'edit', $meeting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Meeting'), ['action' => 'delete', $meeting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meeting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Meetings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meeting'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Institutions'), ['controller' => 'Institutions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Institution'), ['controller' => 'Institutions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['controller' => 'People', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'People', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="meetings view large-9 medium-8 columns content">
    <h3><?= h($meeting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($meeting->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($meeting->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($meeting->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= h($meeting->place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($meeting->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Institution') ?></th>
            <td><?= $meeting->has('institution') ? $this->Html->link($meeting->institution->name, ['controller' => 'Institutions', 'action' => 'view', $meeting->institution->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($meeting->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related People') ?></h4>
        <?php if (!empty($meeting->people)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Birthday') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Neighborhood') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Telephone') ?></th>
                <th scope="col"><?= __('Cellphone') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Member') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($meeting->people as $people): ?>
            <tr>
                <td><?= h($people->id) ?></td>
                <td><?= h($people->name) ?></td>
                <td><?= h($people->lastname) ?></td>
                <td><?= h($people->birthday) ?></td>
                <td><?= h($people->city) ?></td>
                <td><?= h($people->neighborhood) ?></td>
                <td><?= h($people->address) ?></td>
                <td><?= h($people->telephone) ?></td>
                <td><?= h($people->cellphone) ?></td>
                <td><?= h($people->photo) ?></td>
                <td><?= h($people->member) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'People', 'action' => 'view', $people->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'People', 'action' => 'edit', $people->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'People', 'action' => 'delete', $people->id], ['confirm' => __('Are you sure you want to delete # {0}?', $people->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
