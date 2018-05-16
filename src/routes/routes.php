<?php

Route::group(['prefix' => '/', 'middleware' => ['web']], function() {
    Route::resource('admin', 'Bantenprov\Admin\Http\Controllers\AdminController');
});
