<?php

class ProfilesController extends GxController {


	public function actionUpload()
{
    
    $model=$this->loadModel($_POST['user_id'], 'Profiles');

    $model->photo = CUploadedFile::getInstance($model,'photo');
   // echo "$model->photo";
    $userencode=md5($_POST['user_id']);
   $photo=$userencode.$model->photo->name;

   //echo $model->photo->name;

   

   
// or $image->save('images/small.jpg');
        $model->photo->saveAs(
        Yii::getPathOfAlias('webroot').'/images/users/'.$photo);
     //  "http://localhost/erms/images/users/".$model->photo->name);
       
$image = Yii::app()->image->load( Yii::getPathOfAlias('webroot').'/images/users/'.$photo);
$image->resize(140, 140)->quality(75)->sharpen(20);
$image->save(); 

        $model->photo = $photo;
        // save picture name
       if( $model->save())
        {
           $data[] = array('error' => 'Successful');
           $this->redirect(Yii::app()->request->urlReferrer);
           
        } else {
            $data[] = array('error' => 'Unable to save model after saving picture');
        }
    
    // JQuery File Upload expects JSON data
   // echo json_encode($data);

    	$this->render('upload', array( 'model' => $model));
}
 
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Profiles'),
		));
	}

	public function actionHome($id) {
		$this->render('home', array(
			'model' => $this->loadModel($id, 'Profiles'),
		));
	}
        public function actionTutorhome($id) {
		$this->render('tutorhome', array(
			'model' => $this->loadModel($id, 'Profiles'),
		));
	}
        public function actionHmasterhome($id) {
		$this->render('hmasterhome', array(
			'model' => $this->loadModel($id, 'Profiles'),
		));
	}

	public function actionCreate() {
		$model = new Profiles;


		if (isset($_POST['Profiles'])) {
			$model->setAttributes($_POST['Profiles']);
                        $model->profile=Yii::app()->user->id;

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->user_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Profiles');


		if (isset($_POST['Profiles'])) {
			$model->setAttributes($_POST['Profiles']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->user_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Profiles')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		//$dataProvider = new CActiveDataProvider('Profiles');
		//$this->render('index', array(
		//	'dataProvider' => $dataProvider,
		//));

		$dataProvider=new CActiveDataProvider('Profiles', array(
    	'criteria'=>array(
           // 'with'=>array('category'),
                'condition'=>'id=:id',
                'params'=>array(':id'=>'2'),
		    ),
		));
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Profiles('search');
		$model->unsetAttributes();

		if (isset($_GET['Profiles']))
			$model->setAttributes($_GET['Profiles']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
        public function actionTutor() {
		$model = new Profiles('searchTutor');
		$model->unsetAttributes();

		if (isset($_GET['Profiles']))
			$model->setAttributes($_GET['Profiles']);

		$this->render('tutor', array(
			'model' => $model,
		));
	}
        
        public function actionHmaster() {
		$model = new Profiles('searchTutor');
		$model->unsetAttributes();

		if (isset($_GET['Profiles']))
			$model->setAttributes($_GET['Profiles']);

		$this->render('hmaster', array(
			'model' => $model,
		));
	}

}