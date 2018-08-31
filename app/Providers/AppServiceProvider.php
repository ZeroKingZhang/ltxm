<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Home\ForumController;
use App\Models\Forum;
use App\Models\Blogroll;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //将所有的数据 共享给每一个视图
        $data = Forum::getCates(0);
        view()->share('common_cates_data',$data);
         //将已登录用户的数据 共享给视图
        view()->composer('home.layout.index', function ($view) {
            $homeUserInfo = \Session::get('homeUserInfo');
            $user=\DB::table('home_users')->where('uname','=',$homeUserInfo)->first();
            $view->with('login_user',$user);
        });
        view()->composer('home.layout.index', function ($view) {
            $blogroll=\DB::table('blogrolls')->get();
            $view->with('blogroll',$blogroll);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
