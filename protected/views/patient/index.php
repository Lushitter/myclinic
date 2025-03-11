<h1>Patients</h1>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view', // refers to the partial view named '_view'
)); ?>