<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Institution[]|\Cake\Collection\CollectionInterface $institutions
*/
?>
<?= $this->Html->link(__('Añadir Institucion'), ['action' => 'add'], ['class' => 'btn btn-primary pull-right']) ?>
<h3><?= __('Institutions') ?></h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('type') ?></th>
            <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($institutions as $institution): ?>
        <tr>
            <td><?= $this->Number->format($institution->id) ?></td>
            <td><?= h($institution->name) ?></td>
            <td><?= h($institution->type) ?></td>
            <td><?= (is_null($institution->parent))? ' ' : h($institution->parent->name); ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $institution->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $institution->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $institution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institution->id)]) ?>
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