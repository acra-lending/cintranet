<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ClearCacheController extends Controller
{
    public function clearRoute()
    {
        Cache::flush();
        echo("Cache Cleared");
    }
}
