<?php

namespace App\Http\Api\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class AccountController extends Controller
{
    public function getOrders(Request $request)
    {
        $orders = Order::where('user_id', $request->user()->id)
            ->with('products')
            ->get();
        return response()->json([
            'orders' => $orders->map(function ($order) {
                return [
                    'plan_name' => app()->getLocale() === 'ar' ? $order->plan_name_ar : $order->plan_name,
                    'price' => $order->total_price,
                    'status' => app()->getLocale() === 'ar' ? $order->ar_status : $order->status,
                    'products' => $order->products->map(function ($product) {
                        return [
                            'id' => $product->id,
                            'name' => app()->getLocale() === 'ar' ? $product->ar_name : $product->name,
                            'price' => $product->price,
                            'quantity' => $product->pivot->quantity,
                        ];
                    }),
                    'created_at' => $order->created_at->format('Y-m-d H:i:s')
                ];
            })
        ]);
    }

    // Update Password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6'
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            if (app()->getLocale() === 'ar') {

                return response()->json(['error' => 'كلمة المرور الحالية غير صحيحة'], 400);
            } else {
                return response()->json(['error' => 'Current password is incorrect'], 400);
            }
        }

        $user->update(['password' => Hash::make($request->new_password)]);
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تم تحديث كلمة المرور بنجاح']);
        } else {
            return response()->json(['message' => 'Password updated successfully']);
        }
    }
    public function storeContactRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = ContactUs::create($request->only('name', 'email', 'subject', 'message'));
        $supportEmail = 'info@pyramakerz.com';
        Mail::to($supportEmail)->send(new ContactUsMail($contact));
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تم إرسال رسالتك بنجاح'], 201);
        } else {
            return response()->json(['message' => 'Your message has been sent'], 201);
        }
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'school_name' => 'nullable|string|max:255',
            'user_location' => 'nullable|string|max:255',
        ]);

        // Get authenticated user
        $user = Auth::user();

        // Update user details
        $user->update([
            'school_name' => $request->school_name,
            'user_location' => $request->user_location,
        ]);
        if (app()->getLocale() === 'ar') {
            return response()->json([
                'message' => 'تم تحديث الملف الشخصي بنجاح!',
                'user' => $user
            ], 200);
        } else {
            return response()->json([
                'message' => 'Profile updated successfully!',
                'user' => $user
            ], 200);
        }
    }
}
