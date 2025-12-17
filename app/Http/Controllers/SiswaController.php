<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Siswa::with('mentor')->orderBy('usia', 'desc')->paginate(10);
        return view('siswa.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $mentors = Mentor::all();
        return view('siswa.create', ['mentors' => $mentors]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated= $request->validate([
            'nama' => 'required|string|min:3',
            'tanggal_lahir' => 'required|date',
            'jurusan' => 'required|string|min:3',
            'usia' => 'required|numeric|min:17|max:23',
            'mentor_id' => 'required|exists:mentors,id',
        ]);

        Siswa::create([
            'nama' => $validated['nama'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'jurusan' => $validated['jurusan'],
            'usia' => $validated['usia'],
            'mentor_id' => $validated['mentor_id'],
        ]);

        return redirect()->route('siswa.index')->with('success','Data siswa berhasil dibuat');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    //     $siswa = Siswa::with('mentor')->findorfail($id);
    //     return view('siswa.show', ['siswa' => $siswa]);
    // }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
        $siswa->load('mentor');
        return view('siswa.show', ['siswa' => $siswa]);
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

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    //     $siswa = Siswa::findOrFail($id);
    //     $siswa->delete();

    //     return redirect()->route('siswa.index')->with('success','Data siswa berhasil di delete');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success','Data siswa berhasil di delete');
    }
}
