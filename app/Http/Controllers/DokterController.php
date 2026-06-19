<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::where('is_active', true)->get();

        return view('frontend.index', compact('dokters'));
    }
}
