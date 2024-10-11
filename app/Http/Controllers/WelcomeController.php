<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        //$user = User::find(1);

        // User::query()->create([
        //     'name' => 'Helder',
        //     'email' => 'htajnr@admin.com',
        //     'password' => 'admin',
        // ]);

        //Auth::login($user);
        //Auth::logout($user);


        return view('welcome');
    }
}
