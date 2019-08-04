<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    public function testAPI()
    {
        $jsonFile = storage_path() . "/app/config/config.json";
        $jsonObject = json_decode(file_get_contents($jsonFile), true);
        return $jsonObject['configId'];
    }
}
