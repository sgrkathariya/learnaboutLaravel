<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
            'fullName' => 'required',
            'email' => 'required|unique:registrations',
            'address' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'phone' => 'required|digits:10',
        ]);
        Registration::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'address' => $request->address,
            'password' => hash('sha256', $request->password),
            'phone' => $request->phone,
        ]);


        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'email' => 'required|unique:registrations',
        //     'address' => 'required',
        //     'password' => hash('sha256', $request->password),'required',
        //     'phone' => 'required|digits:10',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/register/create')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // $Registrations = new Registration();
        // $Registrations->name = $request['name'];
        // $Registrations->email = $request['email']->unique;
        // $Registrations->address = $request['address'];
        // $Registrations->phone = $request['phone'];
        // $Registrations->password = md5($request['password']);
        // $Registrations->save();
        return redirect('/register/create');
    }

    public function view()
    {
        $Registrations = Registration::all();
        // echo "<pre>";
        // print_r($Registrations->toArray());
        // echo "</pre>";
        // die;

        // return view('registration-view', compact('Registrations'));

        $data = compact('Registrations');
        return view('registration-view')->with($data);
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
        /* method of passing data from button
         method 1
      {{/register/delete/{{$registration->id}}
      or {{url('/register/delete/')}}

      method 2
      {{route('delete', ['id' =>$registration->id])}}
       */

        // $Registrations = Registration::find($id)->delete();
        //  echo "<pre>";
        //     print_r($Registrations->toArray());

        $Registrations = Registration::find($id);
        if (!is_null($Registrations)) {
            $Registrations->delete();
        }
        return redirect()->back();
    }
}
