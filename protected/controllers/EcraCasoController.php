
<?php
class EcraCasoController extends Controller
{
	public $layout='//layouts/column2';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('EcraCaso');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
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
	    $model=new EcraCaso;

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['EcraCaso']))
	    {
	        $model->attributes=$_POST['EcraCaso'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','ecra'=>$model->ecra, 'caso_uso'=>$model->caso_uso));
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 
	
	public function actionDelete($ecra, $caso_uso)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($ecra, $caso_uso)->delete();
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
	
	public function actionUpdate($ecra, $caso_uso)
	{
		$model=$this->loadModel($ecra, $caso_uso);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['EcraCaso']))
		{
			$model->attributes=$_POST['EcraCaso'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'ecra'=>$model->ecra, 'caso_uso'=>$model->caso_uso));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}
	
	public function actionAdmin()
	{
		$model=new EcraCaso('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['EcraCaso']))
			$model->attributes=$_GET['EcraCaso'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($ecra, $caso_uso)
	{		
		$model=$this->loadModel($ecra, $caso_uso);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($ecra, $caso_uso)
	{
		$model=EcraCaso::model()->findByPk(array('ecra'=>$ecra, 'caso_uso'=>$caso_uso));
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
