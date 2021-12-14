<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UpdateProfileRequset;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit() {
        return view('users.edit')->with('user', auth()->user());
    }

    public function update(UpdateProfileRequset $request) {
        $user = Auth::user();

        $user->update([
            'profile_image' => $request->profile_image
        ]);
        return redirect()->route('profile');
    }

    public function allData() {
        return view('users.index', ['data' => User::all()]);
    }
}
