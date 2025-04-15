<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocode;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;


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
        App::setlocale($request->lang);
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
    public function destroy(Request $request)
    {
        $promo = Promocode::find($request->promo_id);

        if (!$promo) {
            if (app()->getLocale() === 'ar') {
                return response()->json(['message' => 'لم يتم العثور على الرمز الترويجي'], 404);
            }
            return response()->json(['message' => 'Promocode not found'], 404);
        }

        $promo->delete();
        if (app()->getLocale() === 'ar') {
            return response()->json(['message' => 'تم حذف الرمز الترويجي بنجاح']);
        }
        return response()->json(['message' => 'Promocode deleted successfully']);
    }
}
