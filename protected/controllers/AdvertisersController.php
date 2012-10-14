<?php

class AdvertisersController extends Controller {
    
    protected $allRecords;

    public function actionDelete() {
        $this->render('delete');
    }

    public function actionEdit() {
        $this->render('edit');
    }

    public function actionIndex() {
        $this->render('index');
    }

    public function actionShowall() {
        $allRecords = Advertiser::model()->findAll();
        
        $this->render('showall', array('allrecords' => $allRecords));
    }

    public function actionAdd() {
        $this->render('add');
    }
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}