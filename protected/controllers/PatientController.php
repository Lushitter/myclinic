<?php
class PatientController extends Controller
{
    public function actionCreate()
    {
        $model = new Patient;

        if (isset($_POST['Patient'])) {
            $model->attributes = $_POST['Patient'];
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Patient');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    // Add other actions for update, delete, etc.
}