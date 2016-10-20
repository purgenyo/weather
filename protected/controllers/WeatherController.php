<?php

class WeatherController extends CController
{
    public function actionIndex() {
        $model = new WeatherForm();
        $weather = new OpenWeatherApi;
        if(isset($_POST['WeatherForm']))
        {
            $model->attributes = $_POST['WeatherForm'];
            if($model->validate()) {
                $cities = array_values(array_filter($_POST['WeatherForm'], function($value) { return $value !== ''; }));

                $weather->setCity( $cities );
                var_dump($weather->getCurrent());

                if(Yii::app()->request->isAjaxRequest){
                    $this->renderPartial('index', compact('model', 'weather'));
                    Yii::app()->end();
                }
            }
        }
        $this->render('index', compact('model', 'weather'));
    }
}