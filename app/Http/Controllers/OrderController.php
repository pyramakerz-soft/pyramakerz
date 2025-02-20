<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'plan_name' => 'required|string',
            'features' => 'required|array' // Ensure features is an array
        ]);

        $order = Order::create([
            'user_id' => Auth::id(),
            'plan_name' => $request->plan_name,
            'features' => json_encode($request->features) // Store as JSON
        ]);

        return response()->json(['message' => 'Order created successfully.', 'order' => $order], 201);
    }
    public function getUserOrders(Request $request)
    {
        $orders = Order::where('user_id', $request->user()->id)->get();

        return response()->json([
            'orders' => $orders->map(function ($order) {
                return [
                    'plan_name' => $order->plan_name,
                    'features' => json_decode($order->features), // Convert JSON to array
                    'created_at' => $order->created_at
                ];
            })
        ]);
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'selected_plan' => 'required|string',
            'plan_features' => 'required|array'
        ]);

        $adminEmail = "ahmed.elragal02@gmail.com";
        $data = [
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'selected_plan' => $request->selected_plan,
            'plan_features' => $request->plan_features
        ];

        Mail::send('emails.plan-selected', $data, function ($message) use ($adminEmail) {
            $message->to($adminEmail)
                ->subject('New Plan Selected');
        });

        return response()->json(['message' => 'Email sent successfully.'], 200);
    }
}
