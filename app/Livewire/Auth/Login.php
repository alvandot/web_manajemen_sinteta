<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Mary\Traits\Toast;

class Login extends Component
{
    use Toast;
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


            // Toast menarik
            $this->toast(
                type: 'success',
                title: 'Selamat Datang!',
                description: 'Anda berhasil masuk ke akun Anda.',
                position: 'toast-middle toast-center',
                icon: 'o-check-circle',
                css: 'alert-success font-bold',
                redirectTo: route('home'),
                timeout: 5000
            );
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
