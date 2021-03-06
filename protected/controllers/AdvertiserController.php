<?php

class AdvertiserController extends Controller {

    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', 
            'postOnly + delete', 
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'view', 'create', 'update', 'showcampaigncolumn'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Advertiser;
        $newkey = $this->getNewKey(); //New key to be inserted
        /**
         * @TODO: This should be outta here. Duplicated on Update. 
         */
        $arRawDate      = getdate(time());
        $lastModified   = array(
                            $arRawDate['year'] . 
                            '-' . 
                            $arRawDate['mon'] . 
                            '-' . 
                            $arRawDate['mday'] . 
                            ' ' . 
                            $arRawDate['hours'] . 
                            ':' . 
                            $arRawDate['minutes'] . 
                            ':' . 
                            $arRawDate['seconds']
                            );
        /**END modified date*/
        if (isset($_POST['Advertiser'])) {
            $model->attributes = $_POST['Advertiser'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->advertiser_id));
        }
        
        $this->render('create', array(
            'model'         => $model,
            'newkey'        => $newkey,
            'lastModified'  => $lastModified[0],
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model          = $this->loadModel($id);
        $arRawDate      = getdate(time());
        $lastModified   = array(
                            $arRawDate['year'] . 
                            '-' . 
                            $arRawDate['mon'] . 
                            '-' . 
                            $arRawDate['mday'] . 
                            ' ' . 
                            $arRawDate['hours'] . 
                            ':' . 
                            $arRawDate['minutes'] . 
                            ':' . 
                            $arRawDate['seconds']
                            );
        
        if (isset($_POST['Advertiser'])) {
            $model->attributes = $_POST['Advertiser'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->advertiser_id));
        }

        $this->render('update', array(
            'model'         => $model,
            'newkey'        => $id, //new key to be fetch from $_GET
            'lastModified'  => $lastModified[0],
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $myValue = 'Content Data';
        $AdvertiserDataColumn = new CActiveDataProvider('Advertiser', array(
            'pagination'    => array('pageSize' => 4),
        ));
        $this->render('index', array(
            'AdvertiserDataColumn' => $AdvertiserDataColumn,
            'myValue'              => $myValue,
        ));
    }

    public function actionShowCampaignColumn() {
        $myValue = 'Content Updated through'. __METHOD__;
        
        $CampaignDataColumn = new CActiveDataProvider('Campaign', array(
            'pagination'    => array('pageSize' => 4),
        ));
        $this->renderPartial('_loadCampColumn', array(
            'CampaignDataColumn' => $CampaignDataColumn,
            'myValue'            => $myValue,
        ), FALSE, TRUE);
    }
    
    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Advertiser('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Advertiser']))
            $model->attributes = $_GET['Advertiser'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * 
     * If no ID is passed, this method will return the table's last ID. 
     * 
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id = null) {
        if($id === null) {
            $model = Advertiser::model();
            $criteria = new CDbCriteria();
            $criteria->limit = 1;
            $criteria->order = 'advertiser_id DESC';
            $modelData = $model->findAll($criteria);
            if($modelData){
                return $modelData;
            }
        } else {
            $model = Advertiser::model()->findByPk($id);
            if ($model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
            return $model;   
        }
    }
    
    /**
     * Fetches new ID to be inserted by _form view object. 
     * @return Int
     */
    protected function getNewKey() {
        $myRecord = $this->loadModel();
        foreach ($myRecord as $recordKey) {
            $lastID = $recordKey->attributes['advertiser_id'];
        }
        if($lastID) {
            return (int) $lastID + 1;
        }
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'advertiser-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    

}
