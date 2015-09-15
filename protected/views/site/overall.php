<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name;

$this->breadcrumbs=array(
	'На главную'=>array('site/index'),
);

?>

<h4>Имена любых двух учителей, у которых максимальное количество общих учеников, и список этих общих учеников:</h4>

<h2><?php echo $firstTeacher;?></h2>
<h2><?php echo $secondTeacher;?></h2>

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
                    'header' => 'ФИО ученика',
                ),
                array(
                    'name' => 'level',
                    'header' => 'Текущий уровень знания языка',
                    'value' => 'Learner::model()->levels[$data->level]',
                ),
                array(
                    'name' => 'email',
                    'header' => 'Email',
                ),
	),
)); ?>

