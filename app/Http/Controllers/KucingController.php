<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kucing;
use Illuminate\Support\Facades\Storage;

class KucingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kucing = Kucing::all();
        return view('indexKucing', compact('kucing'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('addKucing');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'nama_kucing' => 'required|max:255',
            'pemilik' => 'required|max:50',
            'warna' => 'required|max:50',
            'tanggal_titip' => 'required|max:50',
            'tanggal_pulang' => 'required|max:50',
            'gambar' => 'required|image|file|max:5120',
        ]);

        $imagename = time().'.'.$request->gambar->extension();
        $validate['gambar'] = $imagename;
        $request->gambar->move(public_path('images'), $imagename);
        Kucing::create($validate);

        return redirect('indexKucing');
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
        $kucing = Kucing::findorfail($id);
        return view('editKucing', compact('kucing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = $request->validate([
            'nama_kucing' => 'required|max:255',
            'pemilik' => 'required|max:50',
            'warna' => 'required|max:50',
            'tanggal_titip' => 'required|max:50',
            'tanggal_pulang' => 'required|max:50',
        ]);

        if (empty($request->file('gambar'))) {
            $kucing = Kucing::findorfail($id);
            $kucing->update([
                'nama_kucing' => $request->nama_kucing,
                'pemilik' => $request->pemilik,
                'warna' => $request->warna,
                'tanggal_titip' => $request->tanggal_titip,
                'tanggal_pulang' => $request->tanggal_pulang,
            ]);
        }else{
            $imagename = time().'.'.$request->gambar->extension();
            $kucing = Kucing::findorfail($id);
            Storage::delete($kucing->gambar);
            $kucing->update([
                'nama_kucing' => $request->nama_kucing,
                'pemilik' => $request->pemilik,
                'warna' => $request->warna,
                'tanggal_titip' => $request->tanggal_titip,
                'tanggal_pulang' => $request->tanggal_pulang,
                'gambar' => $imagename,
            ]);
            $request->gambar->move(public_path('images'), $imagename);
        }

        return redirect('indexKucing');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kucing = Kucing::find($id);
        Storage::delete([
            $kucing->gambar

        ]);

        $kucing->delete();
        return redirect('indexKucing');
    }
}
