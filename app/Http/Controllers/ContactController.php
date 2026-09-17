<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactEnquiry;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'min:2', 'max:255'],
            'email'   => ['required', 'email', 'max:255'],
            'phone'   => ['required', 'string', 'min:7', 'max:30'],
            'subject' => ['required', 'string', 'min:3', 'max:255'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ]);

        ContactEnquiry::create($data);

        return redirect()->route('contact')->with(
            'success',
            'Thank you for contacting Repose Healing Center. We will be in touch.'
        );
    }
}
