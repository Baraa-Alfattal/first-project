<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index', [
            'users' => User::paginate()
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
            'password' => [
                Password::min(8)->letters()->numbers()->required(), 'confirmed'
            ],


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
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($user)
    {
        $rule = [
            'user' => ['required', 'exists:user,id'],
        ];

        $validation = Validator::make([
            'user' => $user
        ], $rule);

        if (!$validation->fails()) {
            $index = User::findOrFail($user);
            return view('user.show', [
                'user' => $index
            ]);
        } else {
            return $validation->errors();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user)
    {
        $rule = [
            'user-id' => ['required', 'exists:user,id'],
        ];

        $validation = Validator::make([
            'user-id' => $user
        ], $rule);

        if (!$validation->fails()) {
            $index = User::findOrFail($user);
            return view('user.edit', [
                'user' => $index
            ]);
        } else {
            return $validation->errors();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'required',
        ]);

        $update = User::findorFail($user);

        $update->first_name = $request->first_name;
        $update->last_name = $request->last_name;
        $update->password = $request->password;

        // $update->name = strip_tags($request->input('computer-name'));
        // $update->origin = strip_tags($request->input('computer-origin'));
        // $update->price = strip_tags($request->input('computer-price'));

        $update->save();

        return redirect()->route('users.show', $update);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
