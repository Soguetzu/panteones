<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link('Sistema de Panteones', array('controller' => 'pages', 'action' => 'display', 'home'), array('class'=>'navbar-brand')); ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Titulares<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Titulares',array('controller'=>'titulars','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('Nuevo Titular',array('controller'=>'titulars','action'=>'add')) ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Impuestos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Impuestos',array('controller'=>'taxes','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('Agregar impuesto',array('controller'=>'taxes','action'=>'add')); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Panteones <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Panteones',array('controller'=>'cementeries','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('Agregar Panteón',array('controller'=>'cementeries','action'=>'add')); ?></li>
              </ul>
            </li>     
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Usuarios',array('controller'=>'users','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('Agregar Usuario',array('controller'=>'users','action'=>'add')); ?></li>
              </ul>
            </li>  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Defunciones <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Defunciones',array('controller'=>'deceaseds','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('Agregar Defunción',array('controller'=>'deceaseds','action'=>'add')); ?></li>
              </ul>
            </li>  
            <li><?php echo $this->Html->link('Ingresos',array('controller'=>'records', 'action'=>'index')); ?></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
