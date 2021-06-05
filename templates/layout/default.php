<?php
    $cakeDescription = 'Wandecos';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <?= $this->Html->charset() ?>
	<link rel="stylesheet" href="" media="screen,projection" />

    <?= $this->Html->script('morris/morris-0.4.3.min.css') ?>
    <?= $this->Html->script('Lightweight-Chart/cssCharts.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('font-awesome.css') ?>
    <?= $this->Html->css('custom-styles.css') ?>
    <?= $this->Html->css('materialize/css/materialize.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">track_changes</i> <strong>Wandeco's</strong></a>
				
                <div id="sideNav" href=""><i class="material-icons dp48">toc</i>
                </div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i><i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
	

        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li> 
            <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
  
         
	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href=""><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    

                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i>  Produtos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <?= $this->Html->link('Ingredientes', ['controller' => 'ingredients','action' => 'index'], ['title'=>'Ingredientes','escape'=>false, 'class'=>'collapse-item']); ?>
                            </li>
                            <li>
                                <?= $this->Html->link('Produtos', ['controller' => 'products','action' => 'index'], ['title'=>'Produtos','escape'=>false, 'class'=>'collapse-item']); ?>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <?= $this->Html->link('<i class="fa fa-desktop"></i> Clientes', ['controller' => 'customers','action' => 'index'], ['title'=>'Clientes','escape'=>false, 'class'=>'waves-effect waves-dark']); ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-desktop"></i> Pedidos', ['controller' => 'orders','action' => 'index'], ['title'=>'Pedidos','escape'=>false, 'class'=>'waves-effect waves-dark']); ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-desktop"></i> Parametros', ['controller' => 'parameters','action' => 'index'], ['title'=>'Parametros','escape'=>false, 'class'=>'waves-effect waves-dark']); ?>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-desktop"></i> Usuarios', ['controller' => 'users','action' => 'index'], ['title'=>'Parametros','escape'=>false, 'class'=>'waves-effect waves-dark']); ?>
                    </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

		<div id="page-wrapper">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            
            <footer><p>All right reserved.</p>
            </footer>
        </div>
    </div>

    <?= $this->Html->script('jquery-1.10.2.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery.metisMenu.js') ?>
    <?= $this->Html->script('morris/raphael-2.1.0.min.js') ?>
    <?= $this->Html->script('morris/morris.js') ?>
    <?= $this->Html->script('easypiechart.js') ?>
    <?= $this->Html->script('easypiechart-data.js') ?>
    <?= $this->Html->script('Lightweight-Chart/jquery.chart.js') ?>
    <?= $this->Html->script('custom-scripts.js') ?>

    <?= $this->Html->css('materialize/js/materialize.min.js') ?>

</body>

</html>