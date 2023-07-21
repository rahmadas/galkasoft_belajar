<?php

namespace App\Http\Controllers\Latian;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLatianRequest;
use App\Models\Latian;
use App\Models\User;
use Illuminate\Http\Request;

class LatianController extends Controller
{
    public function index()
    {
        // $contact = Contact::all();

        return view('admin.latian.index');
    }

    public function create()
    {

        $users = User::all();

        return view('admin.latian.create', compact('users'));
    }

    public function store(StoreLatianRequest $request)
    {

        $data = $request->validated();

        Latian::create($data);

        return redirect()->route('latian.index')->with('success', 'Data Berhasil Di Tambahkan');
    }
}
