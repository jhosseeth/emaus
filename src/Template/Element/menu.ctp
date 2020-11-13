<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <?php
        echo $this->Html->link(
            $this->Html->image('logo_cumberland.png', ['class' => 'logo_cumberland']),
            ['controller' => 'Pages', 'action' => 'home'],
            ['class' => 'navbar-brand', 'escape' => false]
        );
        ?>
    </div>

    <ul class="nav navbar-nav navbar-right">
        <li><?= $this->Html->link(__('Instituciones'), ['controller' => 'Institutions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Detalles'), ['controller' => 'Details', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Asignacion Personas'), ['controller' => 'InstitutionsPeople', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Reuniones'), ['controller' => 'Meetings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Asistencias'), ['controller' => 'MeetingsPeople', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Personas'), ['controller' => 'People', 'action' => 'index']) ?></li>
        <li class="divider"></li>
        <li><a id="LoginBtn" class="btn btn-default" href="">Ingresar</a></li>
    </ul>
  </div>
</nav>