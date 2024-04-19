<?php

namespace ItsRD\LaravelSimpleCharts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ItsRD\LaravelSimpleCharts\Charts
 */
class Charts extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ItsRD\LaravelSimpleCharts\Charts::class;
    }
}
