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

            if (app()->getLocale() === 'ar') {
                return response()->json(['error' => 'رمز ترويجي غير صالح'], 400);
            } else {
                return response()->json(['error' => 'Invalid promocode'], 400);
            }
        }

        return response()->json([
            'success' => true,
            'discount_type' => $promocode->discount_type,
            'discount_amount' => $promocode->discount_amount
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:promocodes,code',
            'discount_type' => 'required|in:fixed,percentage',
            'discount_amount' => 'required|numeric|min:1',
            'valid_until' => 'nullable|date|after:today',
            'is_active' => 'nullable|boolean',
        ]);

        Promocode::create([
            'code' => $request->code,
            'discount_type' => $request->discount_type,
            'discount_amount' => $request->discount_amount,
            'valid_until' => $request->valid_until,
            'is_active' => 1,
        ]);
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تمت إضافة الرمز الترويجي بنجاح'], 201);
        } else {
            return response()->json(['message' => 'Promocode added successfully'], 201);
        }
    }
    public function destroy($id)
    {
        $promocode = Promocode::findOrFail($id);
        $promocode->delete();

        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تمت مسح الرمز الترويجي بنجاح'], 200);
        } else {
            return response()->json(['message' => 'Promocode deleted successfully'], 200);
        }
    }
}
