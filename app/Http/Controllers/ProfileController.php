<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\PasswordUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Service\NotificationService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('auth.frontend.profile.index', compact('user'));
    }

    public function update(ProfileUpdateRequest $request,NotificationService $notificationService): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validated();
        $user = Auth::user();


        if ($request->hasFile('avatar')) {

            //delete existing file
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            // $validated['avatar'] = Storage::url($avatarPath);
            $validated['avatar'] = $avatarPath;

        }

        // $validated['user_type'] = 'author';// Set user_type to 'author' when updating profile

        $user->update($validated);

        // $user->forceFill($validated)->save();

        $notificationService->updateMessage('Personal Info Profile updated successfully.');

        return back();
    }


    public function updatePassword(PasswordUpdateRequest $request){

        // dd($request);
        $user = Auth::user();
        Auth::logoutOtherDevices($request->current_password);
        $validatedPasswordRequest =  $request->validated();
        $user->password= bcrypt($validatedPasswordRequest['new_password']) ;
        $user->save();
        NotificationService::createMessage('Password Updated Successfully');

        return back();
        

    }

}
