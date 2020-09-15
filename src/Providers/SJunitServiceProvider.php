<?php
/**
 * Created by PhpStorm.
 * User: 86188
 * Date: 2020/9/15
 * Time: 21:24
 */

namespace Yzl\SJunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class SJunitServiceProvider extends ServiceProvider
{
    public function register()
    {
        // echo '这是sjunt 服务提供者';
        // 注册组件路由
        $this->registerRoutes();
        // 指定的组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'sjunit'
        );
    }

    public function boot()
    {
        //
    }
    // 参考别人的写法
    // 对于源码熟悉更好一些
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            // 定义访问路由的域名
            // 'domain' => config('telescope.domain', null),
            // 是定义路由的命名空间
            'namespace' => 'Yzl\SJunitLaravel\Http\Controllers',
            // 这是前缀
            'prefix' => 'sjunit',
            // 这是中间件
            'middleware' => 'web',
        ];
    }
}