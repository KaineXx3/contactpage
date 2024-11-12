<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function someMethod(Request $request)
    {
        // Some action, like saving data
        // For example, after submitting a form

        // Redirect to the 'home' route after the action
        return redirect()->route('home');
    }
}
