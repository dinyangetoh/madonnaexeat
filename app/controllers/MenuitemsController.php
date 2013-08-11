<?php

class MenuitemsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Menuitems'),
		));
	}

	public function actionCreate() {
		$model = new Menuitems;


		if (isset($_POST['Menuitems'])) {
			$model->setAttributes($_POST['Menuitems']);

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
		$model = $this->loadModel($id, 'Menuitems');


		if (isset($_POST['Menuitems'])) {
			$model->setAttributes($_POST['Menuitems']);

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
			$this->loadModel($id, 'Menuitems')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Menuitems');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Menuitems('search');
		$model->unsetAttributes();

		if (isset($_GET['Menuitems']))
			$model->setAttributes($_GET['Menuitems']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}