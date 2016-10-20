<?php
/**
 * @var WeatherController $weatherData
 */
?>
<div class="row center-block weather-block">
    <?php
        foreach($weatherData as $key => $data)
            $this->renderPartial('_weather_part', array('weather'=>$weatherData[$key][0]));
    ?>
</div>
