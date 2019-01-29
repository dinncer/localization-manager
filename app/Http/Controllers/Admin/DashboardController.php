<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;

class DashboardController extends AdminController
{
    /**
     * Dashboard screen.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}
