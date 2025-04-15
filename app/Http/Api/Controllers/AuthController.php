<?php

namespace App\Http\Api\Controllers;

use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    // Register User & Send OTP
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'school_name' => 'required|string|max:255',
            'user_location' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'school_name' => $request->school_name,
            'user_location' => $request->user_location,
            'role' => 'customer',
        ]);

        // Generate OTP
        $user->generateOTP();

        // Send OTP Email
        Mail::to($user->email)->send(new OTPMail($user->otp));

        return response()->json(['message' => 'OTP sent to email.'], 200);
    }


    // Verify OTP
    public function verifyOTP(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'otp' => 'required|integer',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        if ((string)$user->otp !== $request->otp) {
            return response()->json(['error' => 'Invalid OTP'], 400);
        }


        if (Carbon::now()->greaterThan($user->otp_expires_at)) {
            return response()->json(['error' => 'OTP expired'], 400);
        }

        $user->update([
            'otp' => null,
            'otp_expires_at' => null,
            'email_verified_at' => now()
        ]);

        return response()->json(['message' => 'Email verified successfully.', 'user' => $user], 200);
    }

    // Login User
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        if (!$user->email_verified_at) {
            return response()->json(['error' => 'Email not verified'], 403);
        }

        // $token = $user->createToken('authToken')->plainTextToken;
        $user->tokens()->delete();
        $tokenResult = $user->createToken('authToken');
        $token = $tokenResult->plainTextToken;

        $tokenResult->accessToken->expires_at = now()->addMinutes(2);
        $tokenResult->accessToken->save();
        session(['expiry' => $tokenResult->accessToken->expires_at]);

        return response()->json(['token' => $token, 'user' => $user], 200);
    }

    // Logout User
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out'], 200);
    }
    public function resendOTP(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user->email_verified_at != null) {
            return response()->json(['error' => 'Email already verified'], 400);
        }

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        if ($user->otp && Carbon::now()->lessThan($user->otp_expires_at)) {
            $time = Carbon::now()->diffInSeconds($user->otp_expires_at);
            return response()->json(['error' => "Please wait $time seconds"], 400);
        }

        $user->generateOTP();

        Mail::to($user->email)->send(new OTPMail($user->otp));

        return response()->json(['message' => 'OTP sent to email.'], 200);
    }
}
