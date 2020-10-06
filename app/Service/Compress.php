<?php

namespace App\Service;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

/**
 * Created by PhpStorm.
 * User: AlcaponexD
 * Date: 15/09/2020
 * Time: 21:41
 */
class Compress
{

    public function compression($request)
    {

        $files = $request;
        $urls = [];
        foreach ($files as $file) {
            $img = (string) Image::make($file)->encode($file->extension(), 65);
            $path = '/uploads/' .$file->getClientOriginalName();

           $imagem = Storage::disk('public')->put($path,$img);
            $urls[] = env('APP_URL').'/storage'.$path;
        }

        return response()->json($urls);
    }
}