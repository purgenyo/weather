<?php

class WeatherController extends CController
{

    public function actionIndex() {
        $model = new WeatherForm();
        $weather = new OpenWeatherApi;
        $weatherData = [];
        if(isset($_POST['WeatherForm']))
        {
            $model->attributes = $_POST['WeatherForm'];
            if($model->validate()) {
                $cities = array_filter($_POST['WeatherForm'], function($value) { return $value !== ''; });
                foreach($cities as $key => $city){
                    $weather->setCity($city);
                    $weatherData[$key] = $weather->getCurrent();
                }
            }
        }
        $this->render('index', compact('model', 'weatherData'));
    }
}