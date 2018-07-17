<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Biodata;
use App\User;

class MasterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = User::orderby('id')->get();
        $halo2 = Biodata::orderby('id')->get();
        return view('sipp.administrasi.master_user', compact('halo', 'halo2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sipp.administrasi.master_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'nik'       => 'required',
            'name'      => 'required',
            'password'  => 'required',
            'email'     => 'required',
            'handphone' => 'required',
            'role'      => 'required',
            
        ));

        // store in the database
        $user = new User;

        $user->nik          = $request->nik;
        $user->name         = $request->name;
        $user->password     = $request->password;
        $user->email        = $request->email;
        $user->handphone    = $request->handphone;
        $user->role         = $request->role;

        $user->save();

        // redirect to another page
        return redirect()->route('sipp.administrasi.master_user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $halo = Biodata::where('id', $id)->get();
        // return view('sipp.administrasi.master_user', compact('halo'));
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
