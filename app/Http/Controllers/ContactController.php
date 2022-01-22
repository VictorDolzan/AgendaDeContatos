<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $contact = Contact::where('user_id', '=', $user->id);
    }
}
