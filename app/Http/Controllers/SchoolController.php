<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hello_message;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('school_hello.index', [
            'schools' => hello_message::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('school_hello.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descreption' => 'required',
            'picture' => 'required',
            'message' => 'required|string'
        ]);
        $h_message = hello_message::create([
            'descreption' => $request->descreption,
            'picture' => $request->picture,
            'message' => $request->message
        ]);
        return redirect()->route('school.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($school)
    {
        $rule = [
            'school' => ['required', 'exists:hello_messages,id'],
        ];
        $validation1 = Validator::make([
            'school' => $school
        ], $rule);

        if (!$validation1->fails()) {
            $index = hello_message::findOrFail($school);
            return view('school_hello.show', [
                'school' => $index
            ]);
        } else {
            return $validation1->errors();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($school)
    {
        $rule = [
            'school' => ['required', 'exists:hello_messages,id'],
        ];
        $validation1 = Validator::make([
            'school' => $school
        ], $rule);

        if (!$validation1->fails()) {
            $index = hello_message::findOrFail($school);
            return view('school_hello.edit', [
                'school' => $index
            ]);
        } else {
            return $validation1->errors();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $school)
    {
        $request->validate([
            'descreption' => 'sometimes|required|string',
            'picture' => 'sometimes|required',
            'message' => 'sometimes|required'
        ]);

        $ubdate = hello_message::findOrFail($school);

        $ubdate->descreption = $request->descreption;
        $ubdate->picture = $request->picture;
        $ubdate->message = $request->message;

        $ubdate->save();

        return redirect()->route('school.show', $ubdate);
    }

    /**
     * Remove the specified resource from storage.
     */
}
    