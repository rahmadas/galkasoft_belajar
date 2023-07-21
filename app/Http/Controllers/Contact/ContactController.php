<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contact = Contact::all();

        return view('admin.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  Cara 1 Validasi
    // public function store(Request $request)
    // {
        
    //     $contact = $request->input('name');

    //     $request->validate([
    //         'name' => 'required|string',
    //         'name' => ['required', 'string'],
    //         'number' => 'required|numeric'
    //     ]);

    //     User::create($request->all());

    //     return redirect()->route('contact.index')->with('success','Data Berhasil Di Tambahkan');

    // }

    public function store(StoreContactRequest $request)
    {

        $data = $request->validated();

        User::create($data);

        return redirect()->route('contact.index')->with('success','Data Berhasil Di Tambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    // public function show(Contact $contact)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Contact  $contact
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Contact $contact)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Contact  $contact
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Contact $contact)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Contact  $contact
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Contact $contact)
    // {
    //     //
    // }
}
