<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user-first-name' => 'required',
            'user-last-name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',

        ]);

        $user = new User();
        $user->first_name = strip_tags($request->input('user-first-name'));
        $user->last_name = strip_tags($request->input('user-last-name'));
        $user->email = strip_tags($request->input('email'));
        $user->password = strip_tags($request->input('password'));
        $user->is_admin = strip_tags($request->input('is_admin'));
        $user->is_student = strip_tags($request->input('is_student'));
        $user->school_owner = strip_tags($request->input('school_owner'));

        $user->save();
        return redirect()->route('user.index');
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
