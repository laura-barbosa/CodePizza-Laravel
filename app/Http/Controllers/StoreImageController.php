<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\images;
use Illuminate\Support\Facades\Response;
use Image;

class StoreImageController extends Controller
{
    function index()
    {

        $data = images::latest()->paginate();
        return view('store_image', compact('data'))

    }

    function insert_image(Request $request)
    {
        $request->validate([
            'nomesabor'=> 'required'
            'user_image'=> 'required|image|max:2048'
        ])

        $image_file = $request->user_image;

        $image = image::make($image_file);

        Response::make($image->encode('jpeg'));

        $form_data = array(
            'nomesabor' => $request->nomesabor
            'user_image' => $image
        );

        Images::create($form_data)

        return redirect()->back()->with('sucess','imagem armazenada com sucesso');

        function fetch_image($image_id)
        {
            $image = Images::finOrFail($image_id);

            $image_file = Image::make($image->user_image);

            $response = response::make($image_file)->encode('jpeg'));

            $response->header('content-Type','image/jpeg');

            return $response;
        }
    }
}
