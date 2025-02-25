<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;

class AccountController extends Controller
{
    public function getOrders(Request $request)
    {
        $orders = Order::where('user_id', $request->user()->id)
            ->with('products')
            ->get();
        // return response()->json($orders);
        return response()->json([
            'orders' => $orders->map(function ($order) {
                return [
                    'plan_name' => $order->plan_name,
                    'products' => $order->products->map(function ($product) {
                        return [
                            'id' => $product->id,
                            'name' => $product->name,
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
            return response()->json(['error' => 'Current password is incorrect'], 400);
        }

        $user->update(['password' => Hash::make($request->new_password)]);

        return response()->json(['message' => 'Password updated successfully']);
    }
    public function storeContactRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactUs::create($request->all());

        return response()->json(['message' => 'Thank you for contacting us! We will get back to you soon.'], 201);
    }
}
