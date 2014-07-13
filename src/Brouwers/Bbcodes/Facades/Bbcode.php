<?php namespace Brouwers\Bbcodes\Facades;

use Illuminate\Support\Facades\Facade;

class Bbcode extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bbcode';
    }

}