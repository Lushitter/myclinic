<?php
class TindakanController extends Controller {
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Tindakan');
        $this->render('index', array('dataProvider' => $dataProvider));
    }

    public function actionCreate() {
        $model = new Tindakan;

        if (isset($_POST['Tindakan'])) {
            $model->attributes = $_POST['Tindakan'];
            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        if (isset($_POST['Tindakan'])) {
            $model->attributes = $_POST['Tindakan'];
            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }

        $this->render('update', array('model' => $model));
    }

    public function actionDelete($id) {
        $this->loadModel($id)->delete();
        $this->redirect(array('index'));
    }

    public function loadModel($id) {
        $model = Tindakan::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }
}