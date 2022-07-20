<?php

namespace Avxman\Exchanger\Classes;

use Avxman\Exchanger\Abstracts\ExchangerAbstract;
use Avxman\Exchanger\Interfaces\ExchangerAdminInterface;
use Avxman\Exchanger\Interfaces\ExchangerInterface;
use Illuminate\Support\Collection;

class ExchangerClass extends ExchangerAbstract implements ExchangerInterface, ExchangerAdminInterface
{

    public function reset(bool $hard = false): self
    {
        $this->initParams($hard);
        return $this;
    }

    public function setEnabled(bool $isEnabled = true): self
    {
        $this->enabled = $isEnabled;
        return $this;
    }

    public function setModelName(string $name): self
    {
        if(class_exists($name)) $this->modelName = $name;
        return $this;
    }

    public function setModelPriceName(string $name): self
    {
        if(class_exists($name)) $this->modelPriceName = $name;
        return $this;
    }

    public function isError(): bool
    {
        return $this->isError;
    }

    public function save(?Collection $collection = null, bool $isPermission = false): bool
    {
        return false;
    }

}
