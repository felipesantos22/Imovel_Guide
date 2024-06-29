<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function store(Request $request)
    {
        $messages = [
            'email.unique' => 'Email já cadastrado.',
            'email.email' => 'Insira um email válido.',
        ];

        $request->validate([
            'email' => 'required|email|unique:users,email',
        ], $messages);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);    
        
        $user = $this->user->create($data);    
        
        Auth::login($user);    
        
        return redirect()->route('home');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function register()
    {
        return view('pages.register');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email ou senha inválidos.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Você foi desconectado com sucesso.');
    }
}