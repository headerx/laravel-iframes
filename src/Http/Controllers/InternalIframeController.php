<?php

namespace HeaderX\Iframes\Http\Controllers;

use Illuminate\Contracts\View\View;

class InternalIframeController
{
    public function __invoke(string $path): View
    {
        $query_string = '';


        $uri = explode('?', $_SERVER['REQUEST_URI']);

        if (count($uri) > 1) {
            $query_string = $uri[1];
        }

        parse_str($query_string, $_GET);

        return view('iframes::'.config('iframes.theme').'.internal-iframe', [
            'iframeSource' => $path,
            '$_GET' => $query_string,
        ]);
    }
}
