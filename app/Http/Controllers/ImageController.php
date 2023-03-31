<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function resizeImage(Request $request)
    {
        $image = $request->file('image');

        // Set output file size
        $width = 300;
        $height = 300;

        // Resize the image
        $img = Image::make($image)->resize($width, $height);

        // Save the resized image
        $img->save(public_path('images/' . $image->getClientOriginalName()));

        return 'Image has been resized!';
    }
}
?>