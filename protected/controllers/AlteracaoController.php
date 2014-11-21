<?php

class AlteracaoController extends RController {

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

    public function actionExport() {
        $model = new Alteracao;
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['Alteracao']))
            $model->attributes = $_POST['Alteracao'];

        $exportType = $_POST['fileType'];
        $this->widget('ext.heart.export.EHeartExport', array(
            'title' => 'List of Alteracao',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'grid_mode' => 'export',
            'exportType' => $exportType,
            'columns' => array(
                'cod_alteracao',
                'stakeholder',
                'data_alteracao',
                'descricao',
            ),
        ));
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
        $model = new Alteracao;

        $this->performAjaxValidation($model, 'alteracao-form');

        if (isset($_POST['Alteracao'])) {
            $model->attributes = $_POST['Alteracao'];
            if ($model->save()) {
                if (isset($_POST['Alteracao']['requisitoses']))
                    $model->saveManyMany('requisitoses', $_POST['Alteracao']['requisitoses']);
                $this->redirect(array('view', 'id' => $model->cod_alteracao));
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

        $this->performAjaxValidation($model, 'alteracao-form');

        if (isset($_POST['Alteracao'])) {
            $model->attributes = $_POST['Alteracao'];
            if ($model->save()) {
                if (isset($_POST['Alteracao']['requisitoses']))
                    $model->saveManyMany('requisitoses', $_POST['Alteracao']['requisitoses']);
                else
                    $model->saveManyMany('requisitoses', array());
                $this->redirect(array('view', 'id' => $model->cod_alteracao));
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
        $dataProvider = new CActiveDataProvider('Alteracao');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Alteracao('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Alteracao']))
            $model->attributes = $_GET['Alteracao'];

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
        $model = Alteracao::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'alteracao-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
