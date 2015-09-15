<?php

class TeacherController extends Controller
{
    
	public function actionIndex()
	{
		$this->render('index');
	}

	public function loadModel($id)
	{
		$model=Teacher::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
        
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
                if (!$id)
                    $model=new Teacher();
                else
                    $model=$this->loadModel($id);
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Teacher']))
		{
			$model->attributes=$_POST['Teacher'];
                        $model->leanerIDs = $_POST['Teacher']['leanerIDs'];

			if($model->save())
				$this->redirect(array('site/index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete()
	{
            if (isset($_GET['id'])) {
                
                $id = $_GET['id'];
		$this->loadModel($id)->delete();

            }
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if(!isset($_GET['ajax']))
                    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('site/index'));
	}
        
}