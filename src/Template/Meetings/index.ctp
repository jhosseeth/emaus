<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Meeting[]|\Cake\Collection\CollectionInterface $meetings
*/
?>
<?= $this->Html->link(__('Añadir Reunion'), ['action' => 'add'], ['class' => 'btn btn-primary pull-right']) ?>
<h3><?= __('Meetings') ?></h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('type') ?></th>
            <th scope="col"><?= $this->Paginator->sort('date') ?></th>
            <th scope="col"><?= $this->Paginator->sort('time') ?></th>
            <th scope="col"><?= $this->Paginator->sort('place') ?></th>
            <th scope="col"><?= $this->Paginator->sort('description') ?></th>
            <th scope="col"><?= $this->Paginator->sort('institution_id') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($meetings as $meeting): ?>
        <tr>
            <td><?= $this->Number->format($meeting->id) ?></td>
            <td><?= h($meeting->type) ?></td>
            <td><?= h($meeting->date) ?></td>
            <td><?= h($meeting->time) ?></td>
            <td><?= h($meeting->place) ?></td>
            <td><?= h($meeting->description) ?></td>
            <td><?= $meeting->has('institution') ? $this->Html->link($meeting->institution->name, ['controller' => 'Institutions', 'action' => 'view', $meeting->institution->id]) : '' ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $meeting->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $meeting->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $meeting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meeting->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div>
