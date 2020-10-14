<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use KnowThat\Logics\{
    TestLogic
};

class FacadeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 测试容器绑定
        $this->app->bind('TestLogic',function(){
            return new TestLogic();
        });
    }
}
