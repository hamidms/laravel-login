<?php

namespace App\Http\Controllers\Auth;

use App\Rules\MatchCurrentPassword;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('auth.change-password');
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => ['required', new MatchCurrentPassword],
            'new_password' => [
                'required',
                'string',
                'confirmed',
                'min:10',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]+$/',
            ],
        ]);

        $validator->setAttributeNames([
            'new_password' => 'new password',
        ]);

        $validator->messages()->add('new_password.regex', 'The :attribute must contain at least one lowercase letter, one uppercase letter, one digit, and one special character.');

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->back()->with('success', 'Password changed successfully.');
    }

}
