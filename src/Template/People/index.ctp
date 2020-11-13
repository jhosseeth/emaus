<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person[]|\Cake\Collection\CollectionInterface $people
 */
?>

<?= $this->Html->link(__('Añadir Persona'), ['action' => 'add'], ['class' => 'btn btn-primary pull-right']) ?>

<h3><?= __('People') ?></h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
            <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
            <th scope="col"><?= $this->Paginator->sort('city') ?></th>
            <th scope="col"><?= $this->Paginator->sort('neighborhood') ?></th>
            <th scope="col"><?= $this->Paginator->sort('address') ?></th>
            <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
            <th scope="col"><?= $this->Paginator->sort('cellphone') ?></th>
            <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
            <th scope="col"><?= $this->Paginator->sort('member') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($people as $person): ?>
        <tr>
            <td><?= $this->Number->format($person->id) ?></td>
            <td><?= h($person->name) ?></td>
            <td><?= h($person->lastname) ?></td>
            <td><?= h($person->birthday) ?></td>
            <td><?= h($person->city) ?></td>
            <td><?= h($person->neighborhood) ?></td>
            <td><?= h($person->address) ?></td>
            <td><?= h($person->telephone) ?></td>
            <td><?= h($person->cellphone) ?></td>
            <td><?= h($person->photo) ?></td>
            <td><?= $this->Number->format($person->member) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
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
