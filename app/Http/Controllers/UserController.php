<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::orderBy('id_user','desc')->paginate(6);
        return \view('admin.layouts.users.user', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('admin.layouts.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'no_user' => 'required',
            'no_telepon' => 'required',
            'roles' => 'required',
        ]);
        $user['password'] = Hash::make($user['password']);
        User::create($user);
        return \redirect()->route('users.index')->with('success','User has been created successfully');

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
        $user = User::where('id_user', $id)->first();
        return \view('admin.layouts.users.edit', compact('user'));
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
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'alamat' => 'required',
            'no_user' => 'required',
            'no_telepon' => 'required',
            'roles' => 'required',
        ]);
        $data['password'] = Hash::make($data['password']);
        User::where('id_user', $id)->update($data);
        return \redirect()->route('users.index')->with('success','User has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id_user', $id)->delete();
        return \redirect()->route('users.index')->with('success','User has been deleted successfully');
    }
}
