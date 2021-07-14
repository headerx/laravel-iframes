<?php

namespace HeaderX\Iframes\Http\Controllers;

use Illuminate\Http\Request;

class ExternalIframeController
{
    public function __invoke(Request $request)
    {
        $key = str_replace(['?', '='], '', config('iframes.external_link_key'));

        if ($request->has($key)) {
            $iframeSource = $request->$key;

            return view('iframes::'.config('iframes.theme').'.external-iframe', ['iframeSource' => $iframeSource]);
        }
        abort('404');
    }
}
