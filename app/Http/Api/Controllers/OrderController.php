<?php

namespace App\Http\Api\Controllers;

use App\Models\Product;
use App\Models\Promocode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'plan_name' => 'required|string',
            'plan_name_ar' => 'required|string',
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1'
        ]);
        // return response()->json(['request' => $request->all()], 201);
        $discount = 0;
        $discountType = 'fixed';

        if ($request->promocode) {
            $promocode = Promocode::where('code', $request->promocode)
                ->where('is_active', 1)
                ->where('valid_until', '>=', now())
                ->first();

            if ($promocode) {
                $discount = $promocode->discount_amount;
                $discountType = $promocode->discount_type;
                $promocode->increment('times_used'); // Track usage
            }
        }
        // $totalPrice = collect($request->products)->sum(fn($p) => $p['quantity'] * Product::find($p['id'])->price);
        $totalPrice = $request->package_price;

        // Apply discount based on type
        if ($discountType === 'percentage') {
            $totalPrice -= ($totalPrice * $discount / 100);
        } else {
            $totalPrice -= $discount;
        }

        $totalPrice = max($totalPrice, 0);

        $order = Order::create([
            'user_id' => Auth::id(),
            'plan_name' => $request->plan_name,
            'plan_name_ar' => $request->plan_name_ar,
            'total_price' => $totalPrice,
            'discount_applied' => $discount,
            'discount_type' => $discountType
        ]);

        foreach ($request->products as $product) {
            $order->products()->attach($product['id'], ['quantity' => $product['quantity']]);
        }

        return response()->json(['message' => 'Order placed successfully.', 'order' => $order], 201);
    }
    // public function getUserOrders(Request $request)
    // {
    //     $orders = Order::where('user_id', $request->user()->id)->get();

    //     return response()->json([
    //         'orders' => $orders->map(function ($order) {
    //             return [
    //                 'plan_name' => $order->plan_name,
    //                 'features' => json_decode($order->features), // Convert JSON to array
    //                 'created_at' => $order->created_at
    //             ];
    //         })
    //     ]);
    // }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'selected_plan' => 'required|string',
            'plan_products' => 'required|array'
        ]);

        // $adminEmail = "testpyramakerzzz@gmail.com";
        // $adminEmail2 = "testpyramakerzzz@gmail.com";
        // $adminEmail3 = "testpyramakerzzz@gmail.com";

        $adminEmail = "chairman@pyramakerz.com";
        $adminEmail2 = "ahmed.elmohamady@pyramakerz.com";
        $adminEmail3 = "magieginidy@pyramakerz.com";
        $userEmail = $request->user_email;

        // Fetch full product details using IDs
        $productDetails = Product::whereIn('id', collect($request->plan_products)->pluck('id'))
            ->get()
            ->map(function ($product) use ($request) {
                $quantity = collect($request->plan_products)->firstWhere('id', $product->id)['quantity'] ?? 1;
                return [
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'price' => $product->price
                ];
            });

        $data = [
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'selected_plan' => $request->selected_plan,
            'plan_price' => $request->plan_price,
            'products' => $productDetails,
            'date' => now()->format('Y-m-d')
        ];

        Mail::send('emails.plan-selected', $data, function ($message) use ($userEmail) {
            $message->to($userEmail)
                ->subject('New Order');
        });
        Mail::send('emails.plan-selected', $data, function ($message) use ($adminEmail) {
            $message->to($adminEmail)
                ->subject('New Package Order');
        });
        Mail::send('emails.plan-selected', $data, function ($message) use ($adminEmail2) {
            $message->to($adminEmail2)
                ->subject('New Package Order');
        });
        Mail::send('emails.plan-selected', $data, function ($message) use ($adminEmail3) {
            $message->to($adminEmail3)
                ->subject('New Package Order');
        });

        return response()->json(['message' => 'Email sent successfully.'], 200);
    }
    public function updateStatus(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|string',
            'ar_status' => 'required|string',
        ]);
        // dd($request->all());
        $order = Order::find($request->orderId);
        $order->update([
            'status' => $request->status,
            'ar_status' => $request->ar_status,
        ]);

        return response()->json(['message' => 'Order status updated successfully.', 'order' => $order], 200);
    }
}
