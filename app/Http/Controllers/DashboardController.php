<?php

namespace App\Http\Controllers;

class DashboardController
{
    /**
     * Method that returns the dashboard view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('dashboard', [
            'title' => 'Dashboard'
        ]);
    }
}
