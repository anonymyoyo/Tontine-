<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (auth()->user()->role_id == '1') {
            return to_route('dashboard');
        } elseif (auth()->user()->role_id == '2') {
            return to_route('agence');
        } elseif (auth()->user()->role_id == '3') {
            return to_route('commercial');
        } elseif (auth()->user()->role_id == '4') {
            return to_route('user');
        } elseif (auth()->user()->role_id == '5') {
            return to_route('association');
        } elseif (auth()->user()->role_id == '6') {
            return to_route('collectrice');
        } elseif (auth()->user()->role_id == '7') {
            return to_route('comptable');
        }

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
