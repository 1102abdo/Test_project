<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $settings = Setting::findOrFail(1);
        view()->share('settings', $settings);
    }
}
