<?php
/* @var $this HorarioController */
/* @var $model Horario */

$this->breadcrumbs=array(
	'Horarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Horario', 'url'=>array('index')),
	array('label'=>'Administrar Horario', 'url'=>array('admin')),
);
?>

<h1>Crear Horario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>