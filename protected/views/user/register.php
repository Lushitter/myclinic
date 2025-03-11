<h1>Register</h1>
<?php $form = $this->beginWidget('CActiveForm'); ?>
<?php echo $form->labelEx($model, 'username'); ?>
<?php echo $form->textField($model, 'username'); ?>
<?php echo $form->labelEx($model, 'password'); ?>
<?php echo $form->passwordField($model, 'password'); ?>
<?php echo CHtml::submitButton('Register'); ?>
<?php $this->endWidget(); ?>