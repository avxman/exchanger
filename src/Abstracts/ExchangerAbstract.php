<?php

namespace Avxman\Exchanger\Abstracts;

use Avxman\Exchanger\Traits\ExchangerTrait;

abstract class ExchangerAbstract
{
    /**
     * Подключаем свойства
    */
    use ExchangerTrait;

    /**
     * Инициализация свойств
     * @param bool $hard = false
     * @return void
    */
    protected function initParams(bool $hard = false) : void{
        if($hard || !$this->isInit) {
            $config = collect(config()->get('exchanger'));
            $this->enabled = $config->get('enabled');
            $this->modelName = $config->get('model')['exchanger'];
            $this->modelPriceName = $config->get('model')['exchanger_price'];
            $this->model = null;
            $this->isError = false;
            $this->result = collect();
            $this->isInit = true;
        }
    }

    /**
     * Конструктор
    */
    public function __construct()
    {
        $this->initParams();
    }

}
