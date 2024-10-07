<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }

    public function login()
    {
        $this->validate();

        if (Auth::attempt($this->only('email', 'password'))) {
            request()->session()->regenerate();

            $this->success('Login berhasil', position: 'toast-bottom');
            return redirect()->route('home');
        }

        $this->addError('email', 'Email atau password salah');
        $this->addError('password', 'Email atau password salah');
    }

    public function mount()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.auth.login');
    }
}
