<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'user_first_name' => 'required',
            'user_last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'is_admin' => 'requierd|boolean',
            'is_student' => 'requierd|boolean',
            'school_owner' => 'requierd|boolean'

        ]);

        // $user = new User();
        // $user->first_name = strip_tags($request->input('user_first_name'));
        // $user->last_name = strip_tags($request->input('user_last_name'));
        // $user->email = strip_tags($request->input('email'));
        // $user->password = strip_tags($request->input('password'));
        // $user->is_admin = strip_tags($request->input('is_admin'));
        // $user->is_student = strip_tags($request->input('is_student'));
        // $user->school_owner = strip_tags($request->input('school_owner'));

        // $user->save();
        $user = User::create([
            'first_name' => $request->user_first_name,
            'last_name' => $request->user_last_name, 'email' => $request->email,
            'password' => Hash::make($request->password), 'is_admin' => $request->is_admin,
            'is_student' => $request->is_student, 'school_owner' => $request->school_owner
        ]);
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
