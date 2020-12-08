<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    
    public function login(Request $request) {
        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->request('POST', url('/oauth/token'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => config('services.passport.client_id'),
                    'client_secret' => config('services.passport.client_secret'),
                    'username' => $request->username,
                    'password' => $request->password,
                ]
            ]);
            return json_decode((string) $response->getBody(), true);
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() === 400) {
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            } else if ($e->getCode() === 401) {
                return response()->json(['error' => 'Invalid credentials '. $e->getMessage()]);
            }
            return response()->json(['error' => 'Something went wrong on the server.'], $e->getCode());
        }
    }
    
    public function user(request $request) {
        //$user = Auth::user();
        // OR
        $user = $request->user();
        if(!$user) {
            $resp = [
                'status' => false,
                'data' => null
            ];
        } else {
            $resp = [
                'status' => true,
                'data' => $user
            ];
        }
        return response()->json($resp);
    }
}
