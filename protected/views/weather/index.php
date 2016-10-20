<?php
/**
 * @var WeatherController $weather
 * @var WeatherForm $model
 */
?>

<div class="form">
<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

    <div class="row">
        <?php echo CHtml::activeLabel($model,'where'); ?>
        <?php echo CHtml::activeTextField($model,'where'); ?>
    </div>


    <div class="row">
        <?php echo CHtml::activeLabel($model,'from'); ?>
        <?php echo CHtml::activeTextField($model,'from'); ?>
    </div>


    <div class="row submit">
        <?php echo CHtml::submitButton('Узнать погоду'); ?>
    </div>

    <?php


    ?>

<?php echo CHtml::endForm(); ?>