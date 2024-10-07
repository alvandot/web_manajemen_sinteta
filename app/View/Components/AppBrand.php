<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AppBrand extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'HTML'
        <a href="/" wire:navigate class="flex items-center justify-center h-full group transition-all duration-300 hover:scale-105">
            <div {{ $attributes->class(["hidden-when-collapsed"]) }}>
                <div class="flex items-center justify-center gap-3">
                    <img src="{{ asset('storage/logo.png') }}" alt="Logo" class="w-16 h-16 animate-pulse" />
                    <span class="font-extrabold text-5xl bg-gradient-to-b from-blue-200 via-blue-300 to-yellow-400 bg-clip-text text-transparent animate-gradient">
                        Sinteta
                    </span>
                </div>
            </div>
            <div class="display-when-collapsed hidden">
                <img src="{{ asset('storage/logo.png') }}" alt="Logo" class="w-12 h-12 animate-bounce" />
            </div>
        </a>
        HTML;
    }
}
