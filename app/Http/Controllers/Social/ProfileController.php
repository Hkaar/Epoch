<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Shows the public profile of a user
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function profile(Request $request, string $username)
    {
        $user = User::where('username', $username)->first();

        return view('social.profile', [
            'user' => $user,
        ]);
    }
}
