<?php

class RequisitoController extends RController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    public function filters() {
        return array(
            'rights - index, view',
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
        $model = new Requisito;

        $this->performAjaxValidation($model, 'requisito-form');

        if (isset($_POST['Requisito'])) {
            $model->attributes = $_POST['Requisito'];
            if ($model->save()) {
                if (isset($_POST['Requisito']['alteracaos']))
                    $model->saveManyMany('alteracaos', $_POST['Requisito']['alteracaos']);
                if (isset($_POST['Requisito']['stakeholders']))
                    $model->saveManyMany('stakeholders', $_POST['Requisito']['stakeholders']);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        $this->performAjaxValidation($model, 'requisito-form');

        if (isset($_POST['Requisito'])) {
            $model->attributes = $_POST['Requisito'];
            if ($model->save()) {
                if (isset($_POST['Requisito']['alteracaos']))
                    $model->saveManyMany('alteracaos', $_POST['Requisito']['alteracaos']);
                else
                    $model->saveManyMany('alteracaos', array());
                if (isset($_POST['Requisito']['stakeholders']))
                    $model->saveManyMany('stakeholders', $_POST['Requisito']['stakeholders']);
                else
                    $model->saveManyMany('stakeholders', array());
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Requisito');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Requisito('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Requisito']))
            $model->attributes = $_GET['Requisito'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id, $modelClass = __CLASS__) {
        $model = Requisito::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'requisito-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
