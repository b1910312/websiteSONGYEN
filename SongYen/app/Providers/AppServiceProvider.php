<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

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
        Validator::extend('exists_in_phongban', function ($attribute, $value, $parameters, $validator) {
            return DB::table('phongban')->where('MaPhongBan', $value)->count() > 0;
        });
        Validator::extend('exists_in_chude', function ($attribute, $value, $parameters, $validator) {
            return DB::table('chude')->where('MaChuDe', $value)->count() > 0;
        });
        Validator::extend('exists_in_khoahoc', function ($attribute, $value, $parameters, $validator) {
            return DB::table('khoahoc')->where('MaKhoaHoc', $value)->count() > 0;
        });
    }
}
