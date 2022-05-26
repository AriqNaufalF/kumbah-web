<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customer.profile', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'address' => 'required'
        ];

        if ($request->email != auth()->user()->email) {
            $rules['email'] = 'required|email|unique:users';
        }

        $validated = $request->validate($rules);

        User::where('id', auth()->user()->id)
            ->update($validated);

        alert()->success("Success", "Profile updated")->autoClose(3000);
        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    // Change Password
    public function change(Request $request)
    {
        $passFromDb = auth()->user()->password;
        if (Hash::check($request->oldpass, $passFromDb)) {
            if (!Hash::check($request->newpass, $passFromDb)) {
                User::find(auth()->user()->id)
                    ->update([
                        'password' => Hash::make($request->newpass)
                    ]);

                alert()->success("Success", "Password updated")->autoClose(3000);
                return redirect('/profile');
            } else {
                alert()->error("Fail", "New password can't be the old password!")->autoClose(3000);
                return redirect('/profile');
            }
        } else {
            alert()->error("Fail", "Old password doesn't matched")->autoClose(3000);
            return redirect('/profile');
        }
    }
}
