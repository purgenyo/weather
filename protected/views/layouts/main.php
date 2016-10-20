<?php
    Yii::app()->clientScript->registerCoreScript('jquery');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="/public/css/bootstrap.min.css">
        <link rel="stylesheet" href="/public/css/custom.css">
    </head>
    <body>
        <div class="container">
            <?=$content?>
        </div>
        <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    </body>
</html>
