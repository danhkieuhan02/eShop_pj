<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::latest()->get();
        return view('contacts.create-contact', compact('contact'));
    }

    public function createContact()
    {
        return view('contacts.create-contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'message' => 'required'
        ]);

        $data = $request->all();
        unset($data['_token']);

        Contact::create($request->all());

        return redirect()->route('contacts.index')
            ->with('_success', 'Your message has been sent successfully, we will reply soon.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
