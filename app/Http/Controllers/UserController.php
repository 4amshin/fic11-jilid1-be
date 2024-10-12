<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.users.list_user', compact('users'));
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
    public function store(StoreUserRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['password'] = Hash::make($validatedData['unhashed_password']);

        User::create($validatedData);

        return redirect()->route('user.index')->with('success', 'User Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // dd($user);
        Log::info('Data user:', ['user' => $user]);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $validatedData = $request->validated();

        $validatedData['password'] = Hash::make($validatedData['unhashed_password']);

        $user->update($validatedData);

        return redirect()->route('user.index')->with('success', 'User Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('info', 'User Deleted');
    }
}
