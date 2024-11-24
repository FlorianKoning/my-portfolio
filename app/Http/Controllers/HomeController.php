<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('florian.koning2004@gmail.com')->send(new ContactMail(
            $request->fullName, 
            $request->email,
            $request->subject,
            $request->message
        ));

        return redirect()->route('home.index')->with('succes_contact', 'Mail has succesfully been send to florian.koning2004@gmail.com.');
    }
}
