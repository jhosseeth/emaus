<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Institution $institution
*/
?>

<?= $this->Form->create($institution) ?>
<fieldset>
    <legend><?= __('Editar Institucion') ?></legend>
    <div class="form-group">
        <?= $this->Form->control('name', ['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
    <?php
        echo $this->Form->control('type', [
            'type' => 'select',
            'class' => 'form-control',
            'empty' => '(Seleccione una)',
            'options' => [
                'Presbiterio' => 'Presbiterio',
                'Comite' => 'Comité',
                'Iglesia' => 'Iglesia',
                'Consistorio' => 'Consistorio',
                'Ministerio' => 'Ministerio',
                'Grupo' => 'Grupo'
            ]
        ]);
    ?>
    </div>
    <div class="form-group">
        <?= $this->Form->control('parent_id', ['type' => 'text', 'class' => 'form-control']) ?>
    </div>
</fieldset>
<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>