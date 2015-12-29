<?php

namespace SundaySim\Http\Controllers\Backend;

use Illuminate\Http\Request;

use SundaySim\User;
use SundaySim\Http\Requests\StoreUserRequest;
use SundaySim\Http\Requests\UpdateUserRequest;
use SundaySim\Http\Requests\DeleteUserRequest;

class UsersController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
    	$this->users = $users;

    	parent::__construct();
    }

    public function index()
    {
    	$users = $this->users->paginate(10);

    	return view('backend.users.index', compact('users'));
    }

    public function create(User $user)
    {
    	return view('backend.users.form', compact('user'));
    }

    public function store(StoreUserRequest $request)
    {
    	$this->users->create($request->only('name', 'email', 'password'));

    	return redirect(route('backend.users.index'))->with('status', 'User has been created.');
    }

    public function edit($id)
    {
    	$user = $this->users->findOrFail($id);

    	return view('backend.users.form', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
    	$user = $this->users->findOrFail($id);

    	$user->fill($request->only('name', 'email', 'password'))->save();

    	return redirect(route('backend.users.edit', $user->id))->with('status', 'User has been updated.');
    	
    }

    public function confirm(DeleteUserRequest $request, $id)
    {
    	$user = $this->users->findOrFail($id);

    	return view('backend.users.confirm', compact('user'));
    }

    public function destroy(DeleteUserRequest $request, $id)
    {
    	$user = $this->users->findOrFail($id);

    	$user->delete();

    	return redirect(route('backend.users.index'))->with('status', 'User has been deleted.');
    }
}
