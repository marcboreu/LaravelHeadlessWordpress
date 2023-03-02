<?php


use Illuminate\Support\Facades\Route;


if(str_contains(request()->getSchemeAndHttpHost(), '127.0.0.1')) {
    Route::get('/{path?}', function () {
        return view('reactappdevelopment');
    })->where('path', '.*');
} else {
    Route::view('/{path?}', 'reactapp')
        ->where('path', '.*');
}
    