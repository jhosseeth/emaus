<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\InstitutionsPerson[]|\Cake\Collection\CollectionInterface $institutionsPeople
*/
?>
<?= $this->Html->link(__('Añadir Asignacion de personas'), ['action' => 'add'], ['class' => 'btn btn-primary pull-right']) ?>
<h3><?= __('Institutions People') ?></h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('start') ?></th>
            <th scope="col"><?= $this->Paginator->sort('end') ?></th>
            <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('institution_id') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($institutionsPeople as $institutionsPerson): ?>
        <tr>
            <td><?= $this->Number->format($institutionsPerson->id) ?></td>
            <td><?= h($institutionsPerson->start) ?></td>
            <td><?= h($institutionsPerson->end) ?></td>
            <td><?= $institutionsPerson->has('person') ? $this->Html->link($institutionsPerson->person->name, ['controller' => 'People', 'action' => 'view', $institutionsPerson->person->id]) : '' ?></td>
            <td><?= $institutionsPerson->has('institution') ? $this->Html->link($institutionsPerson->institution->name, ['controller' => 'Institutions', 'action' => 'view', $institutionsPerson->institution->id]) : '' ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $institutionsPerson->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $institutionsPerson->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $institutionsPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $institutionsPerson->id)]) ?>
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