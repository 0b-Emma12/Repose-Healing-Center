<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmissionEnquiry;

class AdmissionsController extends Controller
{
    public function index()
    {
        return view('admissions');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'           => ['required', 'string', 'min:2', 'max:255'],
            'phone'          => ['required', 'string', 'min:7', 'max:30'],
            'email'          => ['required', 'email', 'max:255'],
            'preferred_date' => ['required', 'date'],
            'contact_method' => ['required', 'in:Phone,Email'],
            'message'        => ['nullable', 'string', 'max:5000'],
        ]);

        AdmissionEnquiry::create($data);

        return redirect()->route('admissions')->with(
            'success',
            'Thank you. Your admission enquiry has been received. We will contact you to confirm the next steps.'
        );
    }
}
