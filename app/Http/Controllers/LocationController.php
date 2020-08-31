<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location()
    {
        $ip = getIPAddress();

        if (!validateIP($ip)) {
            $ip = '24.48.0.1';
        }

        $response = json_decode(file_get_contents("http://ip-api.com/json/$ip"), true);

        if ($response['status'] === 'success' && $response['country']) return response($response['country'], 200);

        return response('Failed to Fetch!', 404);
    }
}

function validateIP($ip)
{
    return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
}

function getIPAddress()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {

        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
