<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<h1>Система учёта учеников и учителей</h1>

<?php
$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs'=>array(
        'Учителя'=>array('content'=>$this->renderPartial('teacherView', null, true), 'id'=>'tab1'),
        'Ученики'=>array('content'=>$this->renderPartial('learnerView', null, true), 'id'=>'tab2'),
    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        'collapsible'=>false,
    ),
));
?>

<div class="form">
<div class="row">
    <?php echo CHtml::link('Список учителей, с которыми занимаются только ученики, родившиеся в апреле',array('site/teacherapr')); ?>
</div>
<div class="row">
    <?php echo CHtml::link('Имена любых двух учителей, у которых максимальное количество общих учеников, и список этих общих учеников.',array('site/overall')); ?>
</div>
</div>