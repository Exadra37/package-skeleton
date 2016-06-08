<?php

Route::group(['prefix' => 'api'], function()
{
    Route::resource('resource', 'Exadra37\PackageSkeleton\Controllers\ResourceController');
});
