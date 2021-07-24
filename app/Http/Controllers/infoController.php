<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class infoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
        
        return view('data.statistik', [
            'data' => $data,
        ]);
    }

    public function index2()
    {
        $response= Http::get('https://dekontaminasi.com/api/id/covid19/hospitals');
        $data = $response->json();

        return view('data.rumahsakit', [
            'data' => $data,
        ]);
    }
}
