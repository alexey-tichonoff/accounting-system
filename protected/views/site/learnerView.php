<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name;
?>

<?php

//$this->menu=array(
//	array('label'=>'Добавить', 'url'=>array('create')),
//);

?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'learner-grid',
	'dataProvider'=>Learner::model()->search(),
	'columns'=>array(
                array(
                    'name' => 'id',
                    'htmlOptions'=>array('style'=>'width: 30px'),                    
                ),
		'name',
		'email',
		'birthday',
//                array(
//                    'name'=>'birthday',
//                    'filter'=>false,
//                    'value'=>'date("d.m.Y [h:m]", $data->birthday)',
//                ),		
                array(
                    'name' => 'level',
                    'value' => 'Learner::model()->levels[$data->level]',
                ),
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update} {delete}',
                        'buttons'=>array
                        (
                            'update' => array
                            (
                                'label'=>'Редактировать',
                                'url'=>'Yii::app()->createUrl("learner/update", array("id"=>$data->id))',
                            ),
                            'delete' => array
                            (
                                'label'=>'Удалить',
                                'url'=>'Yii::app()->createUrl("learner/delete", array("id"=>$data->id))',
                            ),
                    ),
		),
	),
)); ?>

<?php echo CHtml::button('Добавить', array('submit' => array('learner/update/0'))); ?>