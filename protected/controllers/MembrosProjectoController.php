
<?php
class MembrosProjectoController extends RController
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('MembrosProjecto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
						
			'rights - index, view',
						
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
	    $model=new MembrosProjecto;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['MembrosProjecto']))
	    {
	        $model->attributes=$_POST['MembrosProjecto'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','projecto'=>$model->projecto, 'membro'=>$model->membro));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($projecto, $membro)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($projecto, $membro)->delete();
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
	
	public function actionUpdate($projecto, $membro)
	{
		$model=$this->loadModel($projecto, $membro);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['MembrosProjecto']))
		{
			$model->attributes=$_POST['MembrosProjecto'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'projecto'=>$model->projecto, 'membro'=>$model->membro));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new MembrosProjecto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['MembrosProjecto']))
			$model->attributes=$_GET['MembrosProjecto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($projecto, $membro)
	{		
		$model=$this->loadModel($projecto, $membro);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($projecto, $membro)
	{
		$model=MembrosProjecto::model()->findByPk(array('projecto'=>$projecto, 'membro'=>$membro));
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
