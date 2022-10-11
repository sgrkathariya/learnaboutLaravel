<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Validator as Validator;
use hash;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registration-view');
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:registrations',
            'address' => 'required',
            'password' => 'required',
            'phone' => 'required|digits:10',
        ]);
        Registration::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' =>hash('sha256', $request->password),
            'phone' => $request->phone,
        ]);

        // $Registrations = new Registration();
        // $Registrations->name = $request['name'];
        // $Registrations->email = $request['email']->unique;
        // $Registrations->address = $request['address'];
        // $Registrations->phone = $request['phone'];
        // $Registrations->password = md5($request['password']);
        // $Registrations->save();
        return redirect('/register/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
