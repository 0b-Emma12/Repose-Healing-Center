<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use App\Models\AdmissionEnquiry;

class AdminController extends Controller
{
    public function index()
    {
        $contactEnquiries   = ContactEnquiry::latest()->get();
        $admissionEnquiries = AdmissionEnquiry::latest()->get();

        return view('admin.submissions', compact('contactEnquiries', 'admissionEnquiries'));
    }
}
