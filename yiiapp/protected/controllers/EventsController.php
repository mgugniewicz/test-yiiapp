<?php

class EventsController extends Controller {
    public function actionCreate()
    {
        $model = new Event();
        if(isset($_POST['Event'])) {
            $model->attributes = $_POST['Event'];
            $model->save();
        }
        $this->render('create', ['model' => $model]);
    }

    public function actionView()
    {
        echo 'viewing an event';
    }

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array(
                'allow',
                'actions' => array('index', 'view', 'create'),
                'users' => array('*'),
            ),
            array(
                'deny',
                'users' => array('*'),
            ),
        );
    }
}