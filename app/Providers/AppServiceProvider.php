<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Setting; 
use App\Models\Profil; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;



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
    // public function boot(): void
    // {
    //     Paginator::useBootstrap();
    //     View::share('settings', Setting::first());
    //     View::share('profil', Profil::first());
    // }

    public function boot()
    {
        if (Schema::hasTable('settings')) { 
            $settings = DB::table('settings')->first();
            $profil = Profil::first();
            View::share('settings', $settings);
            View::share('profil', Profil::first());
        }
    }



 



}
