<?php
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'На главную'=>array('site/index'),
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'learner-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>32)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->dropDownList($model, 'level', Learner::model()->levels,
                                                array(
                                                'style' => 'width:250px',   
                                                'prompt' => 'Не выбран'
                                                    )
                                               );             
                ?>
            
		<?php echo $form->error($model,'gender'); ?>
	</div>

        <div class="row">
                <?php echo $form->labelEx($model,'birthday'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                   'name' => 'birthday',
                   'model' => $model,
                   'attribute' => 'birthday',
                   'language' => 'ru',
                   'options' => array(
                       'showAnim' => 'fold',
                   ),
                    'htmlOptions' => array(
                          'style' => 'width:250px;'
                      ),                    
                ));?>
                <?php echo $form->error($model,'birthday'); ?>
	</div>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton('Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->