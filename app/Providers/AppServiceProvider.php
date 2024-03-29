<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        Blade::anonymousComponentNamespace('admin.components', 'admin');

        Password::defaults(function (){
            $rule = Password::min(6);

            return $this->app->isProduction() ? $rule->mixedCase()->uncompromised() : $rule;
        });
    }
}
