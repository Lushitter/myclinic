<h1>Create Wilayah</h1>
<?php $form = $this->beginWidget('CActiveForm'); ?>
<div class="row">
    <?php echo $form->labelEx($model, 'name'); ?>
    <?php echo $form->textField($model, 'name'); ?>
    <?php echo $form->error($model, 'name'); ?>
</div>
<div class="row buttons">
    <?php echo CHtml::submitButton('Create'); ?>
</div>
<?php $this->endWidget(); ?>