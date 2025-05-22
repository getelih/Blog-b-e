<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\UpdateImageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Kõik pildid andmebaasist
        $images = Image::all();
        return response()->json($images);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Selle meetodi jaoks pole vajalikke muudatusi, kuna API-ga töötades pole eraldi vormide kuvamist vajalik
        // Aga kui oleks tegemist veebirakendusega, siis siin võiks kuvatud vormi.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreImageRequest $request)
    {
        // Kinnita, et fail on olemas ja sobivas formaadis
        $validated = $request->validated();

        if ($request->hasFile('image')) {

            $path = $request->file('image')->store('images', 'public');

            $image = new Image();
            $image->path = $path;
            $image->save();

            return response()->json($image, 201);
        }

        return response()->json(['error' => 'No image uploaded.'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {

        return response()->json($image);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageRequest $request, Image $image)
    {
        // Kui soovitakse pilti muuta, näiteks muuta metainfot
        $validated = $request->validated();

        // Kui pilt on olemas ja seda soovitakse muuta
        if ($request->hasFile('image')) {
            // Eemalda vana pilt, kui on olemas
            if (Storage::exists($image->path)) {
                Storage::delete($image->path);
            }

            // Lae üles uus pilt
            $path = $request->file('image')->store('images', 'public');
            $image->path = $path;
        }

        $image->save();

        return response()->json($image);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {

        if (Storage::exists($image->path)) {
            Storage::delete($image->path);
        }


        $image->delete();

        return response()->json(['message' => 'Image deleted successfully.']);
    }
}
