<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function createHash(Request $request)
    {
        //Валидация исходных данных
        $request->validate([
            'src' => 'required'
        ]);

        $src = $request->post('src');

        $hash = hash('md4', $src);

        return response($hash);
    }
}
