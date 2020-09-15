<?php
/**
 * Created by PhpStorm.
 * User: 86188
 * Date: 2020/9/15
 * Time: 21:15
 */

Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('junit.store');

// 测试路由
Route::get('test', 'TestController@index');
