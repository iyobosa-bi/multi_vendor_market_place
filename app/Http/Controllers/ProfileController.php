<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
        public function index()
        {
            $user = Auth::user();

            return view('auth.frontend.profile.index', compact('user'));
        }

        public function update(ProfileUpdateRequest $request)
        {
            $validated = $request->validated();
            $user = Auth::user();

            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
                $validated['avatar'] = Storage::url($avatarPath);
            }

            $user->fill($validated);
            $user->save();

            return redirect()->route('profile')->with('status', 'Profile updated successfully.');
        }
}
