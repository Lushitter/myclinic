<h1>Create Patient</h1>
<?php $form = $this->beginWidget('CActiveForm'); ?>
<?php echo $form->labelEx($model, 'name'); ?>
<?php echo $form->textField($model, 'name'); ?>
<?php echo $form->labelEx($model, 'address'); ?>
<?php echo $form->textField($model, 'address'); ?>
<?php echo $form->labelEx($model, 'phone'); ?>
<?php echo $form->textField($model, 'phone'); ?>
<?php echo CHtml::submitButton('Create'); ?>
<?php $this->endWidget(); ?>