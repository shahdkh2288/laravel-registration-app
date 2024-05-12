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
        // Get the original filename of the uploaded image
        $file_name = request()->user_image->getClientOriginalName();
    
        // Move the uploaded image to the public/images directory with the original filename
        request()->user_image->move(public_path('images'), $file_name);
    
        // Hash the password
        $hashedPassword = Hash::make($request->password);
    
        // Create a new Registration model instance with the validated data
        $registration = new Registeration;
        $registration->name = $request->full_name;
        $registration->username = $request->username;
        $registration->password = $hashedPassword; // Store the hashed password
        $registration->email = $request->email;
        $registration->phone = $request->phone;
        $registration->address = $request->address;
        $registration->birthday = $request->birthdate;
        $registration->image = $file_name; // Store the original filename of the uploaded image
    
        // Save the Registration model instance to the database
        $registration->save();
    
        // Redirect the user to a success page or return a response
        // return redirect()->route('index')->with('success', 'Registration successful.');
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
