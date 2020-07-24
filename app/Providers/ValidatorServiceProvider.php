<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['validator']->extend('empty', function ($attribute, $value, $parameters)
        {
            if(count($value)===0){
                return false;
            }
            // foreach ($value as $v) {
            //     if (!is_int($v)) {
            //         return false;
            //     }
            // }
            return true;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
