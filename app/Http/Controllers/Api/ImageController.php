<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ImageStoreRequest;
use App\Models\Image;
use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{
    public function imageStore(ImageStoreRequest $request)
    {

        $validatedData = $request->validated();
        $validatedData['images'] = $request->file('images')->store('images');
        $data = Image::create($validatedData);

        return response($data, Response::HTTP_CREATED);
    }
}
