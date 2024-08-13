<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Prestasi::all();

        return view('pages.admin.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        // mengunggah
        $image->storeAs('public/prestasis', $image->hashName());


        // save to DB
        Prestasi::create([
            'title'         => $request->title,
            'author'        => $request->author,
            'slug'          => Str::slug($request->title, '-'),
            'image'         => $image->hashName(),
            'description'   => $request->description
        ]);

        return redirect()->route('dashboard.prestasi.index')->with(
            'success', 'Berhasil Menambahkan');

        return $image;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        Storage::disk('local')->delete('public/prestasis/' . basename($prestasi->image));
        $prestasi->delete();

        return redirect()->route('dashboard.prestasi.index')->with(
            'success', 'Berhasil Didelete');
    }
}
