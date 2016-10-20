<?php if($weather && $weather->cod==502): ?>
    <div class="col-md-6">
        <div class="h2">Увы, но город не найден</div>
    </div>
<?php elseif(!$weather): ?>
    <div class="col-md-6">
        <div class="h2">Произошла ошибка на сервере.</div>
    </div>
<?php else:?>
    <div class="col-md-6">
        <div class="h2"><?=$weather->name?></div>
        <div class="h1">
            <?=$weather->main->temp < 0 ? $weather->main->temp : '+'.$weather->main->temp;?>
            <img src='http://openweathermap.org/img/w/<?=$weather->weather[0]->icon?>.png'>
        </div>
        <div class="h4"><?=$weather->weather[0]->description?>,
            <?=$weather->wind->speed > 1.4 ? 'ветер '.$weather->wind->speed.' м/c' : 'ветра нет'?></div>
    </div>
<?php endif;?>