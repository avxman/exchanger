<?php

namespace Avxman\Exchanger\Facades;

use Avxman\Exchanger\Providers\ExchangerServiceProvider;
use Illuminate\Support\Facades\Facade;

/**
 * Фасад рейтинга
 *
 * @see \Avxman\Exchanger\Classes\ExchangerClass
 */
class ExchangerFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ExchangerServiceProvider::class;
    }

}
