<?php

namespace HeaderX\Iframes\Http\Controllers;

use Illuminate\Http\Request;

class ExternalIframeController
{
    public function __invoke(Request $request)
    {
        if ($request->has(str_replace(['?', '='], '', config('iframes.external_link_query')))) {
            $iframeSource = $request->{str_replace(['?', '='], '', config('iframes.external_link_query'))};

            return view('laravel-iframes::'.config('iframes.theme').'.external-iframe', ['iframeSource' => $iframeSource]);
        }
        abort('404');
    }
}
