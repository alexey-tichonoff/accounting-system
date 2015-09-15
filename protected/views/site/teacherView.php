<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'teacher-grid',
	'dataProvider'=>Teacher::model()->search(),
	'columns'=>array(
                array(
                    'name' => 'id',
                    'htmlOptions'=>array('style'=>'width: 30px'),                    
                ),
		'name',
                array(
                    'name' => 'gender',
                    'value' => 'Teacher::model()->genders[$data->gender]',
                ),
		'phone',
                array(
                    'name' => 'leanerCount',
                    'header' => 'Количество учеников',
                    'type' => 'raw',
                    'value' => '$data->leanerCount',
                    'htmlOptions'=>array('style'=>'width: 180px'),
                ),
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update} {delete}',
                        'buttons'=>array
                        (
                            'update' => array
                            (
                                'label'=>'Редактировать',
                                'url'=>'Yii::app()->createUrl("teacher/update", array("id"=>$data->id))',
                            ),
                            'delete' => array
                            (
                                'label'=>'Удалить',
                                'url'=>'Yii::app()->createUrl("teacher/delete", array("id"=>$data->id))',
                            ),
                    ),
		),
            
	),
)); ?>


<?php echo CHtml::button('Добавить', array('submit' => array('teacher/update/0'))); ?>
