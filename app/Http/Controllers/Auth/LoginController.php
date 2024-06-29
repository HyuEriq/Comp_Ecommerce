<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class LoginController extends Controller
{
    public function index()
    {
        return view('User.auth.login',[
            'tittle' => 'Login'
        ]);
    }

    public function resetpassword()
    {
        return view('User.auth.resetpass');
    }

    public function resetproses(Request $request)
{
    $customMessages = [
        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.exists' => 'Email tidak ditemukan di database kami.',
    ];

    $validatedData = $request->validate(
        [
            'email' => 'required|email|exists:users,email',
        ],
        $customMessages
    );

    // Debugging: log the validated email
    \Log::info('Email for password reset: ', ['email' => $validatedData['email']]);

    // Proceed to send reset link
    $status = Password::sendResetLink(
        $request->only('email')
    );

    // Log the status returned from Password::sendResetLink
    \Log::info('Password reset link status: ', ['status' => $status]);

    return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
}

    public function resetpass($token, $email){
        return view('User.auth.chagepass');
    }

    public function resetpassproses(request $request)
    {

        $customMessages = [
            'token.required' => 'Token harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal harus terdiri dari 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
        ];

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ], $customMessages);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);

    }




    public function login_proses(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect()->route('Dashboard');

            } elseif (auth()->user()->role == 'client') {
                return redirect()->route('Home.View');
            }

        }

        return back()->with('LoginError', 'Email Dan Password Anda Salah');
    }

    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('login');
    }
}
