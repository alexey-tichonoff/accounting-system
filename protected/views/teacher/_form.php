<?php
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'На главную'=>array('site/index'),
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teacher-form',
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
		<?php echo $form->textField($model,'name',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model, 'gender', Teacher::model()->genders,
                                                array(
                                                'prompt' => 'Не выбран'
                                                    )
                                               );             
                ?>
            
		<?php echo $form->error($model,'gender'); ?>
	</div>
        <div class="row">
        <label>Назначение учителю ученика</label>    
        <?php 
        Yii::import('chosen.Chosen');
        echo Chosen::activeMultiSelect($model, 'leanerIDs', CHtml::listData(
                    Learner::model()->findAll( array(
                        'order' => 'name'
                    )), 'id', 'name'),
                    array(
                        'data-placeholder' => 'Не выбрано',
                        'style' => 'width:250px', 
                        'options'=>array(
                           'displaySelectedOptions' => true,
                        ),
                        )
                );
        ?>     
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->