<?php

namespace App\Http\Controllers\Compression;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompressionController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
}
