<?php

namespace App\Providers;

use App\Page;
use App\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Setting::get();

        $formatted_settings = [];

        foreach ($settings as $setting) {
            $formatted_settings[$setting['name']] = $setting['content'];
        }

        $menu = [
            '/' => 'home'
        ];

        $pages = Page::all();

        foreach($pages as $page){
            $menu[$page['slug']] = $page['title'];
        }
        
        View::share('settings', $formatted_settings);
        View::share('menu', $menu);
    }
}
