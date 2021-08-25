<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscribed;
use Illuminate\Http\Request;

class SubscribedsController extends Controller
{
    public function createSubscribed(Request $request) {
        Subscribed::create([
            "email" => $request->email
        ]);

        return response()->json([
            "status"  => true,
        ]);
    }
}
