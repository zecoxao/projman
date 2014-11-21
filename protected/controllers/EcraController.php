<?php

class EcraController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
    public $layout = '//layouts/column2';

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}
        
        public function actionExport() {
        $model = new Ecra;
        $model->unsetAttributes();  // clear any default values
        if (isset($_POST['Ecra']))
            $model->attributes = $_POST['Ecra'];

        $exportType = $_POST['fileType'];
        $this->widget('ext.heart.export.EHeartExport', array(
            'title' => 'List of Ecra',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'grid_mode' => 'export',
            'exportType' => $exportType,
            'columns' => array(
                'cod_ecra',
                'descricao',
                'modelo_ecra',
            ),
        ));
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Ecra;

        $this->performAjaxValidation($model, 'ecra-form');

        if(isset($_POST['Ecra']))
		{
			$model->attributes = $_POST['Ecra'];
			if($model->save()) {
                if (isset($_POST['Ecra']['casoUsos'])) $model->saveManyMany('casoUsos', $_POST['Ecra']['casoUsos']);
                $this->redirect(array('view', 'id' => $model->cod_ecra));
            }
		}

		$this->render('create',array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

        $this->performAjaxValidation($model, 'ecra-form');

		if(isset($_POST['Ecra']))
		{
			$model->attributes = $_POST['Ecra'];
			if($model->save()) {
                if (isset($_POST['Ecra']['casoUsos'])) $model->saveManyMany('casoUsos', $_POST['Ecra']['casoUsos']);
                else $model->saveManyMany('casoUsos', array());
				$this->redirect(array('view','id' => $model->cod_ecra));
            }
		}

		$this->render('update',array(
			'model' => $model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Ecra');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new Ecra('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['Ecra']))
			$model->attributes = $_GET['Ecra'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id, $modelClass=__CLASS__)
	{
		$model = Ecra::model()->findByPk($id);
		if($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model, $form=null)
	{
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'ecra-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
