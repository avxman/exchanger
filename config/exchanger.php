<?php

return [

    // Вкл./Откл. валюты на сайте
    'enabled' => env('EXCHANGER_ENABLED', true),

    // Модели рейтинга
    'model'=>[
        'exchanger'=>\Avxman\Exchanger\Models\ExchangersModel::class,
        'exchanger_rate'=>\Avxman\Exchanger\Models\ExchangerRatesModel::class,
        'exchanger_price'=>\Avxman\Exchanger\Models\ExchangerPricesModel::class,
    ],

];
