<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	// $contacts = Contact::all();
        $contacts = Contact::latest()->paginate(2);
        return view('layouts.user',compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perental.create');
    }
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'website' => 'required',
            'email' => 'required',
        ]);
        Contact::create($request->all());
        return redirect()->route('perental.index')
                        ->with('success','Member created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id=null)
    {
        $contact = Contact::find($id);
        return view('perental.show',compact('contact'));
            }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contacts)
    {
        return view('perental.edit',compact('contacts'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Member $member)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $member->update($request->all());
        return redirect()->route('members.index')
                        ->with('success','Member updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::destroy($id);
        return redirect()->route('members.index')
                        ->with('success','Member deleted successfully');
    }
}
