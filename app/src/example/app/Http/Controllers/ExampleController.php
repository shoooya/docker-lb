<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExampleController extends BaseController
{
    function get (Request $request) {
        $results = DB::select('select * from example');
        return view('example', ['results' => $results]);
    }
}
