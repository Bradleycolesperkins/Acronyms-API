<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ApiTokenController extends Controller
{
    /**
     * Create the authenticated user's API token.
     *
     * @param User $user
     * @return array
     */
    public function create(User $user)
    {
        $token = $this->generateNewToken($user);
        return ['token' => $token];
    }

    /**
     * Update the authenticated user's API token.
     *
     * @param User $user
     * @return array
     */
    public function update(User $user)
    {
        $token = $this->generateNewToken($user);
        return ['token' => $token];
    }

    private function generateNewToken(User $user){
        $token = Str::random(80);
        $user->forceFill([
            'api_token' => hash('sha256', $token),
        ])->save();
        return $token;
    }

}
