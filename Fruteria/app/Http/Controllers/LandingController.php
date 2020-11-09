<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function GuzzleHttp\Psr7\uri_for;

class LandingController extends Controller
{
    public function index()
    {
        return view('Landing.index');
    }
    public function acercade()
    {
        return view('Landing.acercade');
    }
    public function domicilios()
    {
        return view('Landing.domicilios');
    }
    public function contacto()
    {
        return view('Landing.contacto');
    }
}
