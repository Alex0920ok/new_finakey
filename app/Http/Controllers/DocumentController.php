<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function download($filename)
    {
        $path = Storage::disk('local')->path('documents/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }
}
