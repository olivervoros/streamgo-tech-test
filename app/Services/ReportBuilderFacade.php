<?php

namespace App\Services;

use Illuminate\Support\Facades\Facade;

class ReportBuilderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ReportBuilder';
    }
}
