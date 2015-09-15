<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name;

$this->breadcrumbs=array(
	'На главную'=>array('site/index'),
);

?>

<h4>Список учителей, с которыми занимаются только ученики, родившиеся в апреле</h4>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'teacher-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
                array(
                    'name' => 'id',
                    'htmlOptions'=>array('style'=>'width: 30px'),                    
                ),
                array(
                    'name' => 'name',
                    'header' => 'ФИО',
                ),
                array(
                    'name' => 'gender',
                    'header' => 'Пол',
                    'value' => 'Teacher::model()->genders[$data->gender]',
                ),
                array(
                    'name' => 'phone',
                    'header' => 'Телефон',
                ),
	),
)); ?>

