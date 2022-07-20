<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
	* This is the model class for table "car".
	*
	* @property string $name
	* @property string $subname
	* @property string $color
	*/
class CarForm extends ActiveRecord
{
				/**
					* @return string
					*/
				public static function tableName(): string
				{
								return 'car';
				}
				
				/**
					* @return array[]
					*/
				public function rules(): array
				{
								return [
												[['name', 'subname', 'color'], 'required'],
												[['name', 'subname', 'color'], 'string'],
								];
				}
}
