<?php

class OpenWeatherApi {

    private $_city_list = [];
    private $_appId;
    private $_version;
    private $_baseUrl;
    private $_method = 'weather';

    function __construct()
    {
        $this->_appId   = Yii::app()->params['openWeather']['appId'];
        $this->_version = Yii::app()->params['openWeather']['version'];
        $this->_baseUrl = Yii::app()->params['openWeather']['baseUrl'];
    }

    public function setCity( $city ) {
        if(is_array($city))
            $this->_city_list = $city;
        else
            $this->_city_list[] = $city;
    }

    public function addCity( $city ){
        if(is_array($city))
            $this->_city_list = array_merge( $this->_city_list, $city );
        else
            $this->_city_list[] = $city;
    }

    public function setMethod( $method ) {
        $this->_method = $method;
    }

    private function getData( $params = []) {
        $params['appId'] = $this->_appId;
        $requestUrl = $this->_baseUrl . DS . 'data' . DS . $this->_version . DS . $this->_method .'?' . http_build_query($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$requestUrl);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode( $result );
    }

    public function getCurrent(){
        $data = [];
        foreach($this->_city_list as $city)
            $data[] = $this->getData(array('q'=>$city . ',ru'));

        return $data;
    }
}