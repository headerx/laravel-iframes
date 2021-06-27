<?php

use App\Core\App\Controllers\Iframes\ExternalIframeController;
use App\Core\App\Controllers\Iframes\InternalIframeController;
use Illuminate\Support\Facades\Route;

Route::any('/'.config('iframes.internal_iframe_prefix').'/{path}', InternalIframeController::class)->where('path', '(.*)');

Route::get('/'.config('iframes.external_iframe_prefix'), ExternalIframeController::class);
