<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // return match ($request->user()->role) {
        //     'admin'     => view('dashboard.admin'),
        //     'cashier'   => view('dashboard.cashier'),
        //     'warehouse' => view('dashboard.warehouse'),
        //     default     => abort(403),
        // };
        return view('dashboard');
    }
}
