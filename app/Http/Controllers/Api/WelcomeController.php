<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class WelcomeController extends Controller
{

    public function index()
    {
        Log::debug(response());
        return response()->json(
          [
            'name'    => config('app.name').' API',
            'message' => '',
            'links'   => [
              [
                'rel'  => 'self',
                'href' => route(Route::currentRouteName()),
              ],
              [
                'rel'  => 'api.v1.articles',
                'href' => route('api.v1.articles'),
              ],
            ],
          ],
          200,
          [],
          JSON_PRETTY_PRINT
        );
    }
}
