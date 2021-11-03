<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner')->with('banners', $banners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //chercher la banniere
        $banner = Banner::find($id);
        
        //return la page d'edit
        return view('admin.banner_edit', [
            "banner" => $banner
        ]);
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
        //validé les données
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            'title' => 'required'
        ]);    

        //prendre la banniere
        $banner = Banner::find($id);
        
        if(Storage::disk('s3')->exists($banner->image_path)){
            Storage::disk('s3')->delete($banner->image_path);
        }

        //nouveau nom pour la nouvelle image
        $newImageName = time() . '-' . $request->title . '.' . $request->image->extension(); 
        
        //update la banniere avec le nouveau nom
        $banner->update([
                "title" => $request->input('title'),
                "image_path" => $newImageName
            ]);

        //mettre l'image dans le dossier upload
        Storage::disk('s3')->put($newImageName, file_get_contents($request->image));
        
        //redirection à la page d'admin
        return redirect('/banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
