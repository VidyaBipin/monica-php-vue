<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PragmaRX\Google2FALaravel\Facade as Google2FA;

class Validate2faController extends Controller
{
    /**
     * Redirect the user after 2fa form has been submitted.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index(Request $request)
    {
        if ($request->has('url')) {
            return redirect(urldecode($request->get('url')));
        }

        return redirect()->route('login');
    }

    public static function loginCallback()
    {
        try {
            app('pragmarx.google2fa')->stateless = false;
        }
        catch (\Exception $e)
        {
            // catch exception until pragmarx/google2fa-laravel package is fixed
            // See https://github.com/antonioribeiro/google2fa-laravel/pull/55
        }
        Google2FA::login();
    }
}
