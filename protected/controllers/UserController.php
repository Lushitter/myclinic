<?php
class UserController extends Controller
{
    public function actionRegister()
    {
        $model = new User;

        if (isset($_POST['User '])) {
            $model->attributes = $_POST['User '];
            $model->password = CPasswordHelper::hashPassword($model->password); // Hash password
            if ($model->save()) {
                $this->redirect(array('login'));
            }
        }

        $this->render('register', array('model' => $model));
    }

    public function actionLogin()
    {
        $model = new LoginForm;

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            if ($model->validate() && $model->login()) {
                $this->redirect(array('site/index'));
            }
        }

        $this->render('login', array('model' => $model));
    }
}
