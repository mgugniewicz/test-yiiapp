<?php

class DashboardController extends Controller {

    public $pageTitle = 'this is the page title';

    public function actionHome(){
//        $this->layout = 'basic';
        $emails = ['test@gmail.com', 'johndoe@gmail.com'];
        $this->render('view', ['emails' => $emails]);
    }

    public function actionEvents(){
        $evts = Event::model()->findAll();
//        $evt = Event::model()->findByPk(1);
        $this->render('events', ['events' => $evts]);
    }

    public function message($msg){
        return $msg;
    }
}