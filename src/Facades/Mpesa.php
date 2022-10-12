<?php

namespace Erra\Mpesa\Facades;

use Illuminate\Support\Facades\Facade;

class Mpesa extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'erra-mpesa';
    }
}
