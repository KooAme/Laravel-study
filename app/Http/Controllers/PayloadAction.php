<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayloadAction extends Controller
{
    public function __invoke(Request $request)
    {
        $result_get = $request->get('nested');
        $result_json = $request->json('nested');
        //$result_get과 $result_json에는 같은 값이 들어간다.
        //get으로 처리하고 json으로 가져온다.
    }
}
