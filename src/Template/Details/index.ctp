<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Detail[]|\Cake\Collection\CollectionInterface $details
*/
?>
<?= $this->Html->link(__('Añadir detalle'), ['action' => 'add'], ['class' => 'btn btn-primary pull-right']) ?>
<h3><?= __('Details') ?></h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('departament') ?></th>
            <th scope="col"><?= $this->Paginator->sort('city') ?></th>
            <th scope="col"><?= $this->Paginator->sort('neighborhood') ?></th>
            <th scope="col"><?= $this->Paginator->sort('address') ?></th>
            <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
            <th scope="col"><?= $this->Paginator->sort('institution_id') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($details as $detail): ?>
        <tr>
            <td><?= $this->Number->format($detail->id) ?></td>
            <td><?= h($detail->departament) ?></td>
            <td><?= h($detail->city) ?></td>
            <td><?= h($detail->neighborhood) ?></td>
            <td><?= h($detail->address) ?></td>
            <td><?= h($detail->telephone) ?></td>
            <td><?= h($detail->email) ?></td>
            <td><?= $detail->has('institution') ? $this->Html->link($detail->institution->name, ['controller' => 'Institutions', 'action' => 'view', $detail->institution->id]) : '' ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $detail->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detail->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detail->id)]) ?>
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