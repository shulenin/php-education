<?php
    
namespace app\controllers;

use app\models\CarForm;
use yii\web\Controller;

class MyController extends Controller
{
				/**
					* @return string
					*/
				public function actionIndex(): string
				{
								$cars = CarForm::find()->all();
								
								return $this->render('index', [
												'cars' => $cars]
								);
				}
}
