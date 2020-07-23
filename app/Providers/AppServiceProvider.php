<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;







/// để không bị lỗi S4201 trong migrate

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
       // thong ke
       

       

        /// để không bị lỗi S4201 trong migrate
        Schema::defaultStringLength(191);
       
        /// gọi hàm bằng package ko có bản

        


        


        

        





    }
}
