<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PlanController extends Controller
{
    // public function sendEmail(Request $request)
    // {
    //     $request->validate([
    //         'user_name' => 'required|string',
    //         'user_email' => 'required|email',
    //         'selected_plan' => 'required|string',
    //         'plan_features' => 'required|array'
    //     ]);

    //     $adminEmail = "ahmed.elragal02@gmail.com";
    //     $data = [
    //         'user_name' => $request->user_name,
    //         'user_email' => $request->user_email,
    //         'selected_plan' => $request->selected_plan,
    //         'plan_features' => $request->plan_features
    //     ];

    //     Mail::send('emails.plan-selected', $data, function ($message) use ($adminEmail) {
    //         $message->to($adminEmail)
    //             ->subject('New Plan Selected');
    //     });

    //     return response()->json(['message' => 'Email sent successfully.'], 200);
    // }

    public function show(Package $package)
    {
        $package->load('products');

        return view('customer.package.package_info', compact('package'));
    }
}
