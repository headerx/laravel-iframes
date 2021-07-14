<?php

use HeaderX\Iframes\Http\Controllers\ExternalIframeController;
use HeaderX\Iframes\Http\Controllers\InternalIframeController;
use Illuminate\Support\Facades\Route;

Route::any('/' . config('iframes.internal_iframe_prefix') . '/{path}', InternalIframeController::class)
    ->where('path', '(.*)')
    ->middleware(config('iframes.middleware'))
    ->name('internal-iframe');

Route::get('/' . config('iframes.external_iframe_prefix'), ExternalIframeController::class)
    ->middleware(config('iframes.middleware'))
    ->name('external-iframe');

