<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        $users = User::paginate(1);
        return view('form', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone_number' => 'required|unique:users|max:11|min:11',
        ]);

        User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return back()->with('success',
        'Thank you for getting in touch with me. I wil contact you with the following details');
    }


}
