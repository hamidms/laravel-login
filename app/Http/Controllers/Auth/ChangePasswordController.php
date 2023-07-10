<?php

namespace App\Http\Controllers\Auth;

use App\Rules\MatchCurrentPassword;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }

    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'current_password' => ['required', new MatchCurrentPassword],
            'new_password' => ['required', 'string', 'confirmed', 'min:10', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]+$/'],
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect('/dashboard')->with('success', 'Password changed successfully.');
    }
}
