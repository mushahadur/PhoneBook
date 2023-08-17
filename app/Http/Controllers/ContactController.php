<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactStore;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.contact.index', ['contact' => Contact::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStore $request)
    {
        $result = Contact::create($request->validated());
        if($result){
            return redirect('/contact/create')->with('message', 'Contact info save successfully');
        }
        // return redirect('/contact/create')->with('message', 'Contact info Not  save ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
