<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contacts.index');

    }

    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a new flight in the database.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...

        $contact = new Contact();

        $contact->nom = $request->nom;

        $contact->prenom = $request->prenom;

        $contact->telephone = $request->telephone;

        $contact->email = $request->email;

        $contact->adresse = $request->adresse;

        $contact->save();

        return redirect('/');
    }




}
