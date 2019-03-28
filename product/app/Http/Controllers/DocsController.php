<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return view('docs.index');
    }
}
