<?php

namespace App\Http\Controllers\Backend\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\Backend\User\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.profile');
    }

  
    public function edit(string $id)
    {
        $findUser = User::find($id);
        return view('profile.edit', compact('findUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {  
        $user  =  User::find($id);
        
        if ($request->hasFile('image')) {
            $destinationPath= 'public/User-image/';
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $user->image = $fileName;
        }

        $user->name        = $request->name;
        $user->city        = $request->city;
        $user->country        = $request->country;
        $user->phone        = $request->phone;
        $user->update();

        return redirect(route('profile.index'))->with('message', 'Your Profile Update successfully.');
    }

}
