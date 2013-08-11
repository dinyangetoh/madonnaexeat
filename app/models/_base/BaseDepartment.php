<?php

/**
 * This is the model base class for the table "{{department}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Department".
 *
 * Columns in table "{{department}}" available as properties of the model,
 * followed by relations of table "{{department}}" available as properties of the model.
 *
 * @property integer $id
 * @property string $name
 * @property integer $faculty
 *
 * @property Faculty $faculty0
 * @property Student[] $students
 */
abstract class BaseDepartment extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{department}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Department|Departments', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name, faculty', 'required'),
			array('faculty', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('id, name, faculty', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'faculty0' => array(self::BELONGS_TO, 'Faculty', 'faculty'),
			'students' => array(self::HAS_MANY, 'Student', 'department'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'faculty' => null,
			'faculty0' => null,
			'students' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('faculty', $this->faculty);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}