<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $users = User::where('user_type', '=', 1)->get();
        $type = 'users';
        return view('website.pages.admin.users.index', compact('users', 'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.pages.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|',
            'email' => 'required|string|email|unique:users',
            'user_type' => 'required|',
        ]);

        $user = new User();
        return $this->saveData($user, $request, 'created');
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
    public function edit(User $user)
    {
        return view('website.pages.admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return $this->saveData($user, $request, 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with(['success' => 'Successfully deleted an user']);
    }

    public function saveData($user, $request, $status)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->user_type == 1) {
            $user->is_admin = 1;
            $user->user_type = 1;
        } else if ($request->user_type == 2) {
            $user->is_admin = 0;
            $user->user_type = 2;
        }
        if ($status == 'created') {
            $user->password = Hash::make('password');
        }
        $user->save();

        return redirect()->route('user.index')->with(['success' => 'Successfully ' . $status . ' an user']);
    }

    public function allAdmin()
    {
        $users = User::where('user_type', '=', 1)->get();
        $type = 'Admin';
        return view('website.pages.admin.users.index', compact('users', 'type'));
    }

    public function allTeacher()
    {
        $users = User::where('user_type', '=', 2)->get();
        $type = 'Teacher';
        return view('website.pages.admin.users.index', compact('users', 'type'));
    }
}
