<?php if (!empty($this->validationErrors)) { ?>
    <div class="box">  
        <div class="flash_error">        
            <?php echo $this->Html->image('test-fail-icon.png', array('alt' => 'flash_error')) ?>   
            <?php echo "Existen errores en la forma corrigalos antes de continuar" ?>
        </div>
    </div>
<?php } ?>
<div class="box">
    <div class="title"><h2>Modificar Departamento</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <?php
        echo $this->Form->create('Departamento');
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo "<div class='row'>";
        echo "<div style='float:left;width:25%'>";        
        echo $this->Form->input('NOMBRE', array('div' => false, 'label' => 'Nombre', 'class' => 'medium'));
        echo "</div>";
        echo "</div>";        
        
        echo "<div class='row'>";
        echo "<div style='float:left;width:25%'>";        
        echo $this->Form->input('PROGRAMA', array('div' => false, 'label' => 'Programa', 'class' => 'small'));
        echo "</div>";
        
        echo "<div style='float:left;width:25%'>";        
        echo $this->Form->input('ACTIVIDAD_PROYECTO', array('div' => false, 'label' => 'Actividad / Proyecto', 'class' => 'small'));
        echo "</div>";
        echo "</div>";        
        ?>
    </div>
</div>

<div class="box">
    <div class="title"><h2>Acciones</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <div class="row">
            <?php echo $this->Form->end('Guardar Cambios'); ?>
        </div>
        <div class="row boton">
            <div class="boton">
                <?php echo $this->Html->link('Regresar', array('action' => 'index')); ?>
            </div>              
        </div>  
    </div>
</div>
