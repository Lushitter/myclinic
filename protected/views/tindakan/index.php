<h1>Tindakan List</h1>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
<a href="<?php echo $this->createUrl('create'); ?>">Create Tindakan</a>