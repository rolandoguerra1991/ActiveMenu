<?php

namespace Juy\ActiveMenu\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Active facade class
 *
 * @package Juy\ActiveMenu
 */
class Active extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'active';
    }
}
