<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/posts');
    }
}
