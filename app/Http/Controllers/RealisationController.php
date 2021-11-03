<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $realisations = Realisation::orderBy('created_at', 'desc')->get();
        return view('admin.realisation', [
            'realisations' => $realisations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.realisation_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'description' => 'required'
        ]);

        $newImageName = time() . '-' . $request->description . '.' . $request->image->extension();

        Storage::disk('s3')->put($newImageName,file_get_contents($request->image));

        $realisation = new Realisation;
        $realisation->description = $request->description;
        $realisation->image_path = $newImageName;
        $realisation->save();

        return redirect('/realisations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $realisation = Realisation::find($id);
        if(Storage::disk('s3')->exists($realisation->image_path)){
            Storage::disk('s3')->delete($realisation->image_path);
        }
        $realisation->delete();
        return redirect('/realisations');
    }
}
