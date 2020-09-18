<?php

namespace App\Http\Controllers\Compression;

use App\Http\Controllers\Controller;
use App\Service\Compress;
use Illuminate\Http\Request;

class CompressionController extends Controller
{
    private $service;
    public function __construct(Compress $compress)
    {
        $this->service = $compress;
    }

    public function index()
    {
        return view('front.index');
    }

    public function compress(Request $request)
    {
        if($request->hasFile('images'))
        {
            return $this->service->compression($request->file('images'));
        }
    }
}
