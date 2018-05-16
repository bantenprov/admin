<?php namespace Bantenprov\Admin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Admin facade.
 *
 * @package Bantenprov\Admin
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Admin extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'admin';
    }
}
