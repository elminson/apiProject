<?php

namespace App\Http\Controllers;

use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data['user'] = $user;
        //If is the first time or api_token is null then generate a new apitoken
        if (is_null($user->api_token)) {
            $user->generateNewApiToken();
        }
        return view('home', $data);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function generateNewToken()
    {
        $user = Auth::user();
        $user->generateNewApiToken();
        return redirect()->route('home');
    }
}
