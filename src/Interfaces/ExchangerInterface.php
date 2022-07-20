<?php

namespace Avxman\Exchanger\Interfaces;

use Illuminate\Database\Eloquent\Collection as Collections;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface ExchangerInterface
{

    // Первый уровень
    /**
     * Сброс параметров по умолчанию.
     * @param bool $hard = false
     * @return self
    */
    public function reset(bool $hard = false) : self;

    /**
     * Перезапись свойства Вкл./Откл. рейтинг
     * @param bool $isEnabled = true
     * @return self
     */
    public function setEnabled(bool $isEnabled = true) : self;

    /**
     * Перезапись свойства рейтинговой модели
     * @param string $name
     * @return self
     */
    public function setModelName(string $name) : self;

    /**
     * Перезапись свойство рейтинга пользователя модели
     * @param string $name
     * @return self
     */
    public function setModelPriceName(string $name) : self;

    // Второй уровень

    /**
     * Проверка на ошибку работы рейтинга
     * @return bool
     */
    public function isError() : bool;


    // Третий уровень


}
