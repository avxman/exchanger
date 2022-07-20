<?php

namespace Avxman\Exchanger\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait ExchangerTrait
{

    /**
     * Вкл./Откл.
     * @var bool $enabled = true
    */
    protected bool $enabled = true;

    /**
     * Найдена ошибка в коде или отсутствует вывод
     * @var bool $isError = false
    */
    protected bool $isError = false;

    /**
     * Уже инициализирован
     * @var bool $isInit = false
     */
    protected bool $isInit = false;

    /**
     * Имя модели
     * @var string $modelName = ''
    */
    protected string $modelName = '';

    /**
     * Имя модели пользователя
     * @var string $modelPriceName = ''
     */
    protected string $modelPriceName = '';

    /**
     * Статус и сообщение при сохранении
     * @var array $message = ['code'=>0, 'message'=>[]]
    */
    protected array $message = ['code'=>0, 'message'=>[]];

    /**
     * Модель
     * @var Model|null $model
    */
    protected Model|null $model;

    /**
     * Результат
     * @var Collection $result
     */
    protected Collection $result;


}
