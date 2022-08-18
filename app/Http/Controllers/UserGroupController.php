<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserGroupController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $usergroups = Role::all();
        return view('usergroups.index', compact('usergroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Role $usergroup) {
        return view('usergroups.form', compact('usergroup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $usergroup = UserGroup::create([
            'name' => $request->name,
        ]);

        $usergroup->users()->sync($request->input('users'));

        return redirect()->route('usergroups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function show(UserGroup $userGroup) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $usergroup) {
        return view('usergroups.form', compact('usergroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $usergroup) {
        $user = User::find($request->user);
        $role = $usergroup->name;

        $user->assignRole($role);

        notify()->success('User assigned to group successfully!');

        return redirect()->route('usergroups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserGroup  $userGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserGroup $userGroup) {
        //
    }
}
