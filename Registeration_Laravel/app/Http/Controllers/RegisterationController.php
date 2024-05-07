<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Registeration;
use Illuminate\Support\Facades\Hash;
class RegisterationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(){
    //     return view("index");
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request){
    // Validate the incoming request data


    // Hash the password
    $hashedPassword = Hash::make($request['password']);

    // Create a new Registeration model instance with the validated data
    $registeration = new Registeration;
    $registeration->name = $request['full_name'];
    $registeration->username = $request['username'];
    $registeration->password = $hashedPassword; // Store the hashed password
    $registeration->email = $request['email'];
    $registeration->phone = $request['phone'];
    $registeration->address = $request['address'];
    $registeration->birthday = $request['birthdate'];
    $registeration->image = $request->file('user_image')->store('images'); // Store the uploaded image

    // Save the Registeration model instance to the database
    $registeration->save();
    // return redirect()->route('index')->with('success', 'Registration successful.');

    // Redirect the user to a success page or return a response
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function show(registeration $registeration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function edit(registeration $registeration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registeration $registeration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registeration  $registeration
     * @return \Illuminate\Http\Response
     */
    public function destroy(registeration $registeration)
    {
        //
    }
}
