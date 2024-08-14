<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Ui\Presets\Preset;

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
        $prestasi = Prestasi::findOrFail($id);

        return view('pages.admin.prestasi.edit', compact(
            'prestasi'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $this->validate($request, [
            'title'  => 'required|unique:news,title,' . $prestasi->id,
            'image'  => 'mimes:png,jpg,jpeg'
        ]);

        //check jika image kosong
        if ($request->file('image') == null ) {

            //update data tanpa image
            $prestasi = Prestasi::findOrFail($prestasi->id);
            $prestasi->update([
                'title'         => $request->title,
                'author'        => $request->author,
                'description'   => $request->description,
                'slug'          => Str::slug($request->title, '-')
            ]);
        } else {

            //hapus image lama
            Storage::disk('local')->delete('public/prestas$prestasis/' . basename($prestasi->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/prestasis/', $image->hashName());

            //update dengan image baru
            $news = Prestasi::findOrFail($prestasi->id);
            $news->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'author'        => $request->author,
                'description'   => $request->description,
                'slug'          => Str::slug($request->title, '-')
            ]);
    }

    if ($prestasi) {
        return redirect()->route('dashboard.prestasi.index')->with(
            'success', 'Berhasil Diupdate');
    } else {
        return redirect()->route('dashboard.prestasi.index')->with(
            'error', 'Gagal Diupdate');
    }
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
