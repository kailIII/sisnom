<?php if (!empty($this->validationErrors)) { ?>
    <div class="box">  
        <div class="flash_error">        
            <?php echo $this->Html->image('test-fail-icon.png', array('alt' => 'flash_error')) ?>   
            <?php echo "Existen errores en la forma corrigalos antes de continuar" ?>
        </div>
    </div>
<?php } ?>
<div class="box">
    <div class="title"><h2>Nuevo Contrato</h2>
        <?php echo $this->Html->image("title-hide.gif", array('class' => 'toggle')); ?>
    </div>
    <div class="content form">
        <?php
        echo $this->Form->create('Contrato',array('url' => array('controller' => 'contratos', 'action' => 'add',$id)));
        echo $this->Form->input('empleado_id', array('value' => $id, 'type' => 'hidden'));

        echo "<div class='row'>";
        echo "<div style='float:left;width:20%'>";
        echo $this->Form->input('FECHA_INI', array('type' => 'text', 'div' => false, 'label' => 'Fecha de Inicio', 'class' => 'datepicker dp-applied')) . "</br>";
        echo "</div>";

        echo "<div style='float:left;width:20%'>";
        echo $this->Form->input('FECHA_FIN', array('type' => 'text', 'div' => false, 'label' => 'Fecha de Finalizacion', 'class' => 'datepicker dp-applied')) . "</br>";
        echo "</div>";
        echo "</div>";

        echo "<div class='row'>";
        echo "<div style='float:left;width:40%'>";
        $options = array('Fijo' => 'Fijo', 'Contratado' => 'Contratado');
        echo $this->Form->input('MODALIDAD', array('div' => false, 'label' => 'Modalidad del Contrato', 'class' => 'small', 'type' => 'select', 'options' => $options, 'empty' => 'Seleccione una opcion'));
        echo "</div>";

        echo "<div style='float:left;width:60%'>";
        $options = array('Administrativo' => 'Administrativo', 'Obrero' => 'Obrero');
        echo $this->Form->input('GRUPO', array('div' => false, 'label' => 'Grupo', 'class' => 'small', 'type' => 'select', 'options' => $options, 'empty' => 'Seleccione una opcion'));
        echo "</div>";
        echo "</div>";

        echo "<div class='row'>";
        echo "<div style='float:left;width:40%'>";        
        echo $this->Form->input('departamento_id', array('div' => false, 'label' => 'Departamento', 'class' => 'small', 'empty' => "Seleccione una opción"));
        echo "</div>";

        echo "<div style='float:left;width:60%'>";        
        echo $this->Form->input('cargo_id', array('div' => false, 'label' => 'Cargo', 'class' => 'small', 'empty' => "Seleccione una opción"));
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
            <?php echo $this->Form->end('Agregar'); ?>                        
        </div>        
        <div class="row boton">
            <div class="boton">
                <?php echo $this->Html->link('Regresar', array('action' => 'edit',$id)); ?>
            </div>
        </div>
    </div>
</div>