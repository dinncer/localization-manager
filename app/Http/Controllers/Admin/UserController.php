<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Lang;

class UserController extends AdminController
{
    /**
     * Users list.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.modules.user.index', compact('users'));
    }

    /**
     * New user.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.modules.user.create');
    }

    /**
     * New user add.
     *
     * @param  UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create($request->all());
        return back()->with(['message' => Lang::get('user.crud_add')]);
    }

    /**
     * User data information.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.modules.user.edit', compact('user'));
    }

    /**
     * User date update.
     *
     * @param  UserRequest $request
     * @param  int         $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        User::find($id)->update($request->all());
        return back()->with(['message' => Lang::get('user.crud_update')]);
    }

    /**
     * Remove user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with(['message' => Lang::get('user.crud_delete')]);
    }
}
