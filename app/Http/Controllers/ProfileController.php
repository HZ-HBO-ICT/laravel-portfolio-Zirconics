<?php

namespace App\Http\Controllers;

class ProfileController
{
    /**
     * Method that returns the profile page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('profile', [
            'title' => 'Profile'
        ]);
    }
}
