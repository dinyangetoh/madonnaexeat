<?php

/**
 * This is the model base class for the table "{{menuusers}}".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Menuusers".
 *
 * Columns in table "{{menuusers}}" available as properties of the model,
 * followed by relations of table "{{menuusers}}" available as properties of the model.
 *
 * @property integer $id
 * @property string $name
 * @property integer $osi_menuitems_id
 * @property integer $osi_roles_id
 * @property string $created
 * @property string $createdby
 * @property string $modified
 * @property string $modifiedby
 *
 * @property Userroles $osiRoles
 * @property Menuitems $osiMenuitems
 */
abstract class BaseMenuusers extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return '{{menuusers}}';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Menu User|Menu Users', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('osi_menuitems_id, osi_roles_id', 'required'),
			array('osi_menuitems_id, osi_roles_id', 'numerical', 'integerOnly'=>true),
			array('name, created, createdby, modified, modifiedby', 'length', 'max'=>45),
			array('name, created, createdby, modified, modifiedby', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, osi_menuitems_id, osi_roles_id, created, createdby, modified, modifiedby', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'osiRoles' => array(self::BELONGS_TO, 'Userroles', 'osi_roles_id'),
			'osiMenuitems' => array(self::BELONGS_TO, 'Menuitems', 'osi_menuitems_id'),
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
			'osi_menuitems_id' => Yii::t('app', 'Menu Items'),
			'osi_roles_id' => Yii::t('app', 'Roles'),
			'created' => Yii::t('app', 'Created'),
			'createdby' => Yii::t('app', 'Createdby'),
			'modified' => Yii::t('app', 'Modified'),
			'modifiedby' => Yii::t('app', 'Modifiedby'),
			'osiRoles' => Yii::t('app', 'Roles'),
			'osiMenuitems' => Yii::t('app', 'Menu Items'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('osi_menuitems_id', $this->osi_menuitems_id);
		$criteria->compare('osi_roles_id', $this->osi_roles_id);
		$criteria->compare('created', $this->created, true);
		$criteria->compare('createdby', $this->createdby, true);
		$criteria->compare('modified', $this->modified, true);
		$criteria->compare('modifiedby', $this->modifiedby, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}