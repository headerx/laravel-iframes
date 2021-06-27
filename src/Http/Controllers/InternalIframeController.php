<?php

namespace App\Core\App\Controllers\Iframes;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class InternalIframeController extends Controller
{
    public function __invoke(string $path): View
    {
        $query_string = '';


        $uri = explode('?', $_SERVER['REQUEST_URI']);

        if (count($uri) > 1) {
            $query_string = $uri[1];
        }

        parse_str($query_string, $_GET);

        return view('headerx::'.config('iframes.theme').'.index', [
            'iframeSource' => $path,
            '$_GET' => $query_string
        ]);
    }
}
