<?php

class MenuusersController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Menuusers'),
		));
	}

	public function actionCreate() {
		$model = new Menuusers;

		$this->performAjaxValidation($model, 'menuusers-form');

		if (isset($_POST['Menuusers'])) {
			$model->setAttributes($_POST['Menuusers']);

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
		$model = $this->loadModel($id, 'Menuusers');

		$this->performAjaxValidation($model, 'menuusers-form');

		if (isset($_POST['Menuusers'])) {
			$model->setAttributes($_POST['Menuusers']);

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
			$this->loadModel($id, 'Menuusers')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Menuusers');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Menuusers('search');
		$model->unsetAttributes();

		if (isset($_GET['Menuusers']))
			$model->setAttributes($_GET['Menuusers']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}