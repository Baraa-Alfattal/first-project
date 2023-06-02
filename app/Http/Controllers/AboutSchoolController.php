<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about_school;
use Illuminate\Support\Facades\Validator;

class AboutSchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('about_school.index', [
            'abouts' => about_school::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about_school.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descreption' => 'required',
            'picture' => 'required',
            'contact' => ['required', 'array'],
            'contact.*.phone1' => ['required', 'string'],
            'contact.*.phone2' => ['required', 'string'],
            'contact.*.ardy1' => ['required', 'string'],
            'contact.*.ardy2' => ['required', 'string'],

            'school_link' => 'required|url'
        ]);
        $about = about_school::create([
            'descreption' => $request->descreption,
            'picture' => $request->picture,
            'contact' => [
                [
                    "contact.phone1" => $request->contact->phone1,
                    "contact.phone2" => $request->contact->phone2,
                    "contact.ardy1" => $request->contact->ardy1,
                    "contact.ardy2" => $request->contact->ardy2,
                ]
            ],
            'school_link' => $request->school_link
        ]);

        return redirect()->route('about_school.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($about)
    {
        $rule = [
            'about' => ['required', 'exists:about_schools,id']
        ];

        $validation = Validator::make(
            [
                'about' => $about
            ],
            $rule
        );
        if (!$validation->fails()) {
            $index = about_school::findOrFail($about);
            return view('about_school.show', [
                'about' => $index
            ]);
        } else
            return $validation->errors();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($about)
    {
        $rule = [
            'about' => ['required', 'exists:about_schools']
        ];
        $validation = Validator::make([
            'about' => $about
        ], $rule);

        if (!$validation->fails()) {
            $index = about_school::findOrFail($about);
            return view('about_school.edit', ['about' => $index]);
        } else
            return $validation->errors();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $about)
    {
        $request->validate([
            'descreption' => 'required',
            'picture' => 'required',
            'contact' => ['required', 'array'],
            'contact.*.phone1' => ['required', 'string'],
            'contact.*.phone2' => ['required', 'string'],
            'contact.*.ardy1' => ['required', 'string'],
            'contact.*.ardy2' => ['required', 'string'],

            'school_link' => 'required|url'
        ]);

        $update = about_school::findOrFail($about);
        $update->descreption = $request->descreption;
        $update->picture = $request->picture;
        $update->contact = [
            $update->contact->phone1 = $request->contact->phone1,
            $update->contact->phone2 = $request->contact->phone2,
            $update->contact->ardy1 = $request->contact->ardy1,
            $update->contact->ardy2 = $request->contact->ardy2,
        ];
        $update->school_link = $request->school_link;
        $update->save();

        return redirect()->route('school.show', $update);
    }

    /**
     * Remove the specified resource from storage.
     */
}
