<?php

namespace App\Traits;

trait GetModelByKeyName
{
    public function getByName(): string
    {
        return property_exists($this, 'ByName') ? $this->ByName : 'uuid';
    }

    public function getRouteKeyName(): string
    {
        return $this->getByName();
    }
}
