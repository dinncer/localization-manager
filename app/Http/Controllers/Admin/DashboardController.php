<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Language;
use App\Models\User;

class DashboardController extends AdminController
{
    /**
     * Dashboard screen.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $languageTotal = Language::count();
        $userTotal = User::count();
        return view('admin.dashboard', compact('languageTotal', 'userTotal'));
    }
}
