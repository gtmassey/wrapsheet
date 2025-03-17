<?php

namespace Gtmassey\Wrapsheet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gtmassey\SmartsheetLaravel\SmartsheetLaravel
 */
class Wrapsheet extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Gtmassey\WrapSheet\Wrapsheet::class;
    }
}
