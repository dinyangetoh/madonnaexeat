<?php

class ExeatController extends GxController {


	public function actionView($id) {
		$this->render('mview', array(
			'model' => $this->loadModel($id, 'Exeat'),
		));
	}

	public function actionCreate() {
		$model = new Exeat;

		$this->performAjaxValidation($model, 'exeat-form');

		if (isset($_POST['Exeat'])) {
			$model->setAttributes($_POST['Exeat']);
                        $model->status='1';
                        $model->entry_status='1';

			if ($model->save()) {
				
					//$this->redirect(array('view', 'id' => $model->id));
                                     $this->redirect(Yii::app()->request->urlReferrer);
			}
		}
 $this->redirect(Yii::app()->request->urlReferrer);
		//$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Exeat');

		$this->performAjaxValidation($model, 'exeat-form');

		if (isset($_POST['Exeat'])) {
			$model->setAttributes($_POST['Exeat']);
                       

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
			$this->loadModel($id, 'Exeat')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Exeat');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Exeat('search');
		$model->unsetAttributes();

		if (isset($_GET['Exeat']))
			$model->setAttributes($_GET['Exeat']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}