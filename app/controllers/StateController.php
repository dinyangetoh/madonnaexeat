<?php

class StateController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'State'),
		));
	}

	public function actionCreate() {
		$model = new State;

		$this->performAjaxValidation($model, 'state-form');

		if (isset($_POST['State'])) {
			$model->setAttributes($_POST['State']);

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
		$model = $this->loadModel($id, 'State');

		$this->performAjaxValidation($model, 'state-form');

		if (isset($_POST['State'])) {
			$model->setAttributes($_POST['State']);

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
			$this->loadModel($id, 'State')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('State');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new State('search');
		$model->unsetAttributes();

		if (isset($_GET['State']))
			$model->setAttributes($_GET['State']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}