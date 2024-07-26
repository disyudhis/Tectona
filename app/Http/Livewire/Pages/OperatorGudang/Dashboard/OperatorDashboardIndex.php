<?php

namespace App\Http\Livewire\Pages\OperatorGudang\Dashboard;

use Livewire\Component;

class OperatorDashboardIndex extends Component
{
    public $page_title = 'Dashboard | Operator Gudang';
    public $page_name = 'Dashboard';
    public function render()
    {
        return view('livewire.pages.operator-gudang.dashboard.operator-dashboard-index')->extends('layouts.admin')->section('content');
    }
}
