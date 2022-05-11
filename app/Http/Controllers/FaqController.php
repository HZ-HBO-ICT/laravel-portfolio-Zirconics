<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class FaqController
{
    /**
     * Method that returns the FaQ view
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        abort(404);
        return view('faq', [
            'title' => 'Faqs',
            'faqs' => Faq::all()
        ]);
    }
}
