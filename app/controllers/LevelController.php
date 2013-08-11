<?php

class LevelController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Level'),
		));
	}

	public function actionCreate() {
		$model = new Level;

		$this->performAjaxValidation($model, 'level-form');

		if (isset($_POST['Level'])) {
			$model->setAttributes($_POST['Level']);

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
		$model = $this->loadModel($id, 'Level');

		$this->performAjaxValidation($model, 'level-form');

		if (isset($_POST['Level'])) {
			$model->setAttributes($_POST['Level']);

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
			$this->loadModel($id, 'Level')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Level');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Level('search');
		$model->unsetAttributes();

		if (isset($_GET['Level']))
			$model->setAttributes($_GET['Level']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}