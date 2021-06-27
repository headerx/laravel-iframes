<?php

namespace App\Core\App\Controllers\Iframes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExternalIframeController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->has(str_replace(['?', '='], '', config('iframes.external_link_query')))) {
            $iframeSource = $request->{str_replace(['?', '='], '', config('iframes.external_link_query'))};
            return view('headerx::'.config('iframes.theme').'.external-iframe', ['iframeSource' => $iframeSource]);
        }
        abort('404');
    }
}
