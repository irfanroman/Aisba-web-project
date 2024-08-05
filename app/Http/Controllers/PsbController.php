<?php

namespace App\Http\Controllers;

use App\Models\Psb;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PsbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $psb =  Psb::latest()->paginate('3');

        return view('pages.admin.psb.index', compact('psb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.psb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'file' => 'required|file|mimes:pdf',
            'description' => 'required'
        ]);
            // Mengambil data
            $image = $request-> file('image');
            // Menyimpan data
            $image->storeAs('public/psbs', $image->hashName());
            // Mengambil File
            $file = $request-> file('file');

            $file->storeAs('public/psbs', $file->hashName());
            
            // Add to database
            Psb::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'file' => $file->hashName(),
            'image' => $image->hashName(),
            'description' => $request->description,
            ]
        );

        return redirect()->route('dashboard.psb.index')->with(
            'success', 'Berhasil Menambahkan');

        return $image;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $psb = Psb::findOrFail($id);

        return view('pages.admin.psb.show', compact(
            'psb'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $psb = Psb::findOrFail($id);

        return view('pages.admin.psb.edit', compact(
            'psb'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Psb $psb)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'file' => 'required|file|mimes:pdf',
            'description' => 'required'
        ]);

        //check jika image kosong
        if ($request->file('image','file') == null ) {

            //update data tanpa image
            $psb = Psb::findOrFail($psb->id);
            $psb->update([
                'title'         => $request->title,
                'slug'          => Str::slug($request->title, '-'),
                'file'          => $request->file,
                'image'         => $request->image,
                'description'   => $request->description,
                
            ]);
        } else {

            //hapus image lama
            Storage::disk('local')->delete('public/psbs/' . basename($psb->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/psbs/', $image->hashName());

            //update dengan image baru
            $psb = psb::findOrFail($psb->id);
            $psb->update([
                'title'         => $request->title,
                'slug'          => Str::slug($request->title, '-'),
                'file'          => $request->file,
                'image'         => $request->image,
                'description'   => $request->description,
                
            ]);
        }

        if ($psb) {
            return redirect()->route('dashboard.psb.index')->with(
                'success', 'Berhasil Diupdate');
        } else {
            return redirect()->route('dashboard.psb.index')->with(
                'error', 'Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $psb = Psb::findOrFail($id);
        Storage::disk('local')->delete('public/psbs/' . basename($psb->image));
        $psb->delete();

        return redirect()->route('dashboard.psb.index')->with(
            'success', 'Berhasil Didelete');
    }
}
