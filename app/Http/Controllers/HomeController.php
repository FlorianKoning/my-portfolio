<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Shows the homepage of the portfolio
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request): View
    {
        return view('homePage');
    }


    /**
     * Controller for the contact form actions
     * @param \App\Http\Requests\ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contact(ContactRequest $request) : RedirectResponse
    {
        $validated = $request->validated();

        Mail::cc('florian.koning2004@gmail.com')->send(new ContactMail(
            $validated['fullName'],
            $validated['email'],
            $validated['subject'],
            $validated['message']
        ));

        return redirect()->route('home.index')->with('succes_contact', 'Mail has succesfully been send to florian.koning2004@gmail.com.');
    }
}
