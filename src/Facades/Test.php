<?php
namespace KnowThat\Test\Facades;

use Illuminate\Support\Facades\Facade;

class Test extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'TestLogic';
    }
}
