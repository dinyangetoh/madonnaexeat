<?php

class UserrolesController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Userroles'),
		));
	}

	public function actionCreate() {
		$model = new Userroles;

		$this->performAjaxValidation($model, 'userroles-form');

		if (isset($_POST['Userroles'])) {
			$model->setAttributes($_POST['Userroles']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Userroles');

		$this->performAjaxValidation($model, 'userroles-form');

		if (isset($_POST['Userroles'])) {
			$model->setAttributes($_POST['Userroles']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Userroles')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Userroles');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Userroles('search');
		$model->unsetAttributes();

		if (isset($_GET['Userroles']))
			$model->setAttributes($_GET['Userroles']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}