<?php

namespace ExtremeSa\Aramex;

use Illuminate\Support\ServiceProvider;

class AramexServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/aramex.php' => config_path('aramex.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/aramex'),
        ], 'lang');
    }

    public function register()
    {
        $this->app->singleton(Aramex::class, function () {
            return new Aramex($this->app);
        });
    }
}
