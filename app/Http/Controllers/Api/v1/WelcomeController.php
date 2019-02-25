<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Support\Facades\Route;

class WelcomeController extends \App\Http\Controllers\Controller
{

    public function index()
    {
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
                'href' => '',
              ],
            ],
          ],
          200,
          [],
          JSON_PRETTY_PRINT
        );
    }
}
