<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Shows the homepage of the portfolio
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        return view('homePage');
    }


    /**
     * Controller for the contact form actions
     * @param \Illuminate\Http\Request $request
     */
    public function contact(ContactRequest $request) {
        $validated = $request->validated();
    }
}
