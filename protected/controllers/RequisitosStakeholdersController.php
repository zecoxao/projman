
<?php
class RequisitosStakeholdersController extends RController
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RequisitosStakeholders');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function filters()
    {
        return array(
            'rights', // perform access control for CRUD operations
 
        );
    }
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
				'expression'=>"Yii::app()->getModule('user')->isAdmin()",
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionCreate()
	{
	    $model=new RequisitosStakeholders;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['RequisitosStakeholders']))
	    {
	        $model->attributes=$_POST['RequisitosStakeholders'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','requisito'=>$model->requisito, 'stakeholder'=>$model->stakeholder));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($requisito, $stakeholder)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($requisito, $stakeholder)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionUpdate($requisito, $stakeholder)
	{
		$model=$this->loadModel($requisito, $stakeholder);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RequisitosStakeholders']))
		{
			$model->attributes=$_POST['RequisitosStakeholders'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'requisito'=>$model->requisito, 'stakeholder'=>$model->stakeholder));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new RequisitosStakeholders('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RequisitosStakeholders']))
			$model->attributes=$_GET['RequisitosStakeholders'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($requisito, $stakeholder)
	{		
		$model=$this->loadModel($requisito, $stakeholder);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($requisito, $stakeholder)
	{
		$model=RequisitosStakeholders::model()->findByPk(array('requisito'=>$requisito, 'stakeholder'=>$stakeholder));
		if($model==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "This operation is not permitted due to an existing foreign key reference.";
		else
			$message = "Invalid operation.";
		throw new CHttpException($e->getCode(), $message);
	}		
}
