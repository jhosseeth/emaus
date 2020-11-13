<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Institution $institution
*/

// echo $this->Number->format($institution->id);
?>
<?= $this->Html->link(
    __('Editar Institucion'),
    ['action' => 'edit', $institution->id],
    ['class' => 'btn btn-primary pull-right'])
?>
<div class="row">
    <div class="col-md-3">
        <?= $this->Html->image('first_cumberland.jpg', ['class' => 'church-img']) ?>
    </div>
    <div class="col-md-9">
            <?php
            switch ($institution->type) {
                case 'Presbiterio':
                    $institutionName = 'Presbiterio ' . $institution->name;
                    break;
                case 'Comite':
                    $institutionName = 'Comité de ' . $institution->name;
                    break;
                case 'Iglesia':
                    $institutionName = 'IPC ' . $institution->name;
                    break;
                case 'Consistorio':
                    $institutionName = (is_null($institution->parent))? ' ' : 'Consistorio de ' . h($institution->parent->name);
                    break;
                case 'Ministerio':
                    $institutionName = 'Ministerio de ' . $institution->name;
                    break;
                case 'Grupo':
                    $institutionName = $institution->name;
                    break;
            }; ?>
        <legend><?= $institutionName ?></legend>
        <?php if (!empty($institution->details)): ?>
        <?php foreach ($institution->details as $details): ?>
        <div class="col-md-6">
            <dl>
                <dt>Telefono</dt>
                <dd><?= h($details->telephone) ?></dd>
            </dl>
            <dl>
                <dt>Correo</dt>
                <dd><?= h($details->email) ?></dd>
            </dl>
        </div>
        <div class="col-md-6">
            <dl>
                <dt>Direccion</dt>
                <dd><?= h($details->neighborhood) ?>, <?= h($details->address) ?></dd>
            </dl>
            <dl>
                <dt>Ciudad</dt>
                <dd><?= h($details->city) ?>, <?= h($details->departament) ?></dd>
            </dl>
        </div>
    </div>
</div>

<?= $this->Html->link(__('View'), ['controller' => 'Details', 'action' => 'view', $details->id]) ?>
<?= $this->Html->link(__('Edit'), ['controller' => 'Details', 'action' => 'edit', $details->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['controller' => 'Details', 'action' => 'delete', $details->id], ['confirm' => __('Are you sure you want to delete # {0}?', $details->id)]) ?>

<?php endforeach; ?>

<?php endif; ?>

<div class="related">
    <h4><?= __('Related People') ?></h4>
    <?php if (!empty($institution->people)): ?>
    <table class="table">
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
        <?php foreach ($institution->people as $people): ?>
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

<div class="related">
    <h4><?= __('Related Meetings') ?></h4>
    <?php if (!empty($institution->meetings)): ?>
    <table class="table">
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
        <?php foreach ($institution->meetings as $meetings): ?>
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
