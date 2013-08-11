<?php

Yii::import('application.models._base.BaseFaculty');

class Faculty extends BaseFaculty
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}