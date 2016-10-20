<?php

class WeatherForm extends CFormModel
{
    public $from;
    public $where;

    public function rules()
    {
        return array(
            array('from', 'required'),
            array('where', 'safe')
        );
    }
}