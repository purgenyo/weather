<?php
/**
 * @var WeatherController $weatherData
 * @var WeatherController $this
 * @var WeatherForm $model
 * @var CActiveForm $form
 */
?>
<h1 class="text-center">Узнайте погоду на вашем маршруте</h1>

<div class="row text-center">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'htmlOptions'=>array('class'=>'form-inline')
    )); ?>

    <?php echo $form->errorSummary($model, false); ?>

    <div class="form-group">
        <?php echo $form->textField($model, 'from', array('placeholder'=>'Откуда', 'class'=>'form-control')) ?>
    </div>

    <div class="form-group">
        <?php echo $form->textField($model,'where', array('placeholder'=>'Куда', 'class'=>'form-control')) ?>
    </div>

    <button type="submit" class="btn btn-default">Узнать погоду</button>
    <?php $this->endWidget(); ?>
</div>

<?php
if($weatherData)
    $this->renderPartial('_weather_information', compact('weatherData'));
?>