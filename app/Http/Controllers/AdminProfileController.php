<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile', [
            'store' => auth()->user()->store,
            'user' => auth()->user()
        ]);
    }

    public function storeUpdate(Request $request, Store $store)
    {
        if ($request->address != $store->address || $request->description != $store->description) {
            $validated = $request->validate([
                'address' => 'min:20|max:255',
                'description' => 'min:10|max:300'
            ]);
            // dd($validated);

            Store::find($store->id)
                ->update($validated);
        } else {
            return back();
        }

        alert()->success("Success", "Store profile updated")->autoClose(3000);
        return redirect('/admin/profile');
    }

    public function adminUpdate(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:100',
            'phone' => 'required|regex:/(0)[0-9]{9}/',
            'confirmed' => 'required|current_password'
        ];

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email|unique:users';
        }

        $validated = $request->validate($rules);

        User::find($user->id)
            ->update($validated);

        alert()->success("Success", "Admin profile updated")->autoClose(3000);
        return redirect('/admin/profile');
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
                return redirect('/admin/profile');
            } else {
                alert()->error("Fail", "New password can't be the old password!")->autoClose(3000);
                return redirect('/admin/profile');
            }
        } else {
            alert()->error("Fail", "Old password doesn't matched")->autoClose(3000);
            return back();
        }
    }
}
