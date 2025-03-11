<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />
    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />
    <a href="<?php echo $this->createUrl('update', array('id' => $data->id)); ?>">Update</a>
    <a href="<?php echo $this->createUrl('delete', array('id' => $data->id)); ?>">Delete</a>
</div>