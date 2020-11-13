<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Emaus';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('cumberland') ?>
    <?= $this->Html->script('jquery') ?>
    <?= $this->Html->script('bootstrap/bootstrap.min') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <?= $this->element('menu') ?>
    </header>
    <?= $this->Flash->render() ?>
    <div class="container-fluid">
        <div class="row">
            <div id="CumberlandNav" data-spy="affix" class="col-md-2">
                <div class="title">
                    <h3>Presbiterio</h3>
                </div>
                <ul class="nav">
                    <li><a href="">Noticias</a></li>
                    <li><a href="">Articulos</a></li>
                    <li><a href="">Calendario</a></li>
                    <li><a href="">Recursos</a></li>
                </ul>
            </div>

            <div class="col-md-offset-2 col-md-10">
                <div class="main_content">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
