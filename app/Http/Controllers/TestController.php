<?php

namespace App\Http\Controllers;

use App\Models\Date;

class TestController extends Controller
{
    public function index()
    {
        $json = '{"Time":{"date": "2020-11-7 22:01:22.012350", "timezone_type": "7", "timezone": "UTC"}}';
        $jsonString = json_encode($json);
        echo (json_decode($jsonString));
    }

    public function showDate()
    {
        $date = Date::all();
        return response()->json([
            'Time' => $date
        ]);
    }
}
