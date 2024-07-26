<?php

namespace App\Http\Livewire\Pages\KepalaGudang\Dashboard;

use Livewire\Component;

class KepalaDashboardIndex extends Component
{
    public function render()
    {
        return view('livewire.pages.kepala-gudang.dashboard.kepala-dashboard-index')
        ->extends('layouts.admin')
        ->section('content');
    }
}
