<?php

namespace App\Http\Controllers;
use App\Models\Role;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $users =User::all();
        $user = new User;

        return view('admin.users.index', compact('users', 'roles', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $password = "password";
        $role = Role::findOrFail($request->role);
        $user = new User;
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($password);
        $user->role_id = $role->id;
        $user->role_name = $role->name;
        $user->save();
        return redirect('/admin/users')->with('success','User Successfully Created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user =User::find($id);
        $users =User::all();

        return  view('admin.users.index', compact('user','roles', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('success', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user,string $id)
    {
        $save=Role::getSingle($id);
    }
}
