<?php

namespace App\Http\Controllers;

use App\Models\Contact;

abstract class Controller
{
    // public function index()
    // {
    //     $contact = Contact::orderBy('name')
    //         ->where('active', 1)
    //         ->where('number', 'LIKE', '+%')
    //         ->get()
    //         ->map(function ($contact) {
    //             return [
    //                 'contact_id' => $contact->id,
    //                 'name' => $contact->name,
    //                 'number' => $contact->number,
    //                 'status' => $contact->active ? 'active' : 'inactive'
    //             ];
    //         });

    //     return $contact;
    // }
}
