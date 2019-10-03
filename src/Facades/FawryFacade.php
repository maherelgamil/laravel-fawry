<?php

namespace Maherelgamil\LaravelFawry\Facades;

use Illuminate\Support\Facades\Facade;

class FawryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fawry';
    }
}
