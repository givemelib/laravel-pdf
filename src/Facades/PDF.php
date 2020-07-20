<?php
namespace GiveMeLib\LaravelPDF\Facades;

use Illuminate\Support\Facades\Facade;

class PDF extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'pdf';
    }

}