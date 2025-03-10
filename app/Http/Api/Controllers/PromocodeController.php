<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocode;
use App\Http\Controllers\Controller;

class PromocodeController extends Controller
{
    public function validatePromocode(Request $request)
    {
        $promocode = Promocode::where('code', $request->code)
            ->where('is_active', 1)
            ->where('valid_until', '>=', now())
            ->first();

        if (!$promocode) {
            return response()->json(['error' => 'Invalid promocode'], 400);
        }

        return response()->json([
            'success' => true,
            'discount_type' => $promocode->discount_type,
            'discount_amount' => $promocode->discount_amount
        ]);
    }
}
