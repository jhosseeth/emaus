<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\MeetingsPerson[]|\Cake\Collection\CollectionInterface $meetingsPeople
*/
?>
<?= $this->Html->link(__('Añadir Asistencia'), ['action' => 'add'], ['class' => 'btn btn-primary pull-right']) ?>

<h3><?= __('Meetings People') ?></h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('reason') ?></th>
            <th scope="col"><?= $this->Paginator->sort('meeting_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($meetingsPeople as $meetingsPerson): ?>
        <tr>
            <td><?= $this->Number->format($meetingsPerson->id) ?></td>
            <td><?= $this->Number->format($meetingsPerson->reason) ?></td>
            <td><?= $meetingsPerson->has('meeting') ? $this->Html->link($meetingsPerson->meeting->id, ['controller' => 'Meetings', 'action' => 'view', $meetingsPerson->meeting->id]) : '' ?></td>
            <td><?= $meetingsPerson->has('person') ? $this->Html->link($meetingsPerson->person->name, ['controller' => 'People', 'action' => 'view', $meetingsPerson->person->id]) : '' ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $meetingsPerson->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $meetingsPerson->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $meetingsPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meetingsPerson->id)]) ?>
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
