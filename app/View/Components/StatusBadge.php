<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusBadge extends Component
{
    public string $label;
    public string $classes;

    public function __construct(string $status)
    {
        [$this->label, $this->classes] = match (strtolower($status)) {
            'aktif' => ['Aktif', 'border-green-500 bg-green-100 text-green-700'],
            'tidak aktif' => ['Tidak Aktif', 'border-red-500 bg-red-100 text-red-700'],
            default => [$status, 'border-slate-400 bg-slate-100 text-slate-600'],
        };
    }

    public function render(): View|Closure|string
    {
        return view('components.status-badge');
    }
}